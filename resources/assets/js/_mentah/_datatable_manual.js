$("#datatable_manual").ready(function(){
  getData($("#datatable_manual > table").attr("data-url"))
})

$("#data_length").change(function(){
  getData($("#datatable_manual > table").attr("data-url"), $(this).val())
})

$("#page").on("click", ".paginate_datatable", function(){
  var dataPage = $(this).attr('data-page')
  var dataLength = $("#data_length").val()
  getData($("#datatable_manual > table").attr("data-url"), dataLength, dataPage)
})

function getData(url, length=10, page=1){
  var fieldPage = $("#datatable_manual > #page")
  var datatableRow = $("#datatable_data");
  datatableRow.attr("style", "display:none")
  axios({
    method: 'get',
    url: url+'/'+length+'?page='+page,
  }).then((response) => {
    fieldPage.find('li').remove().end()
    $("#datatable_manual > table > tbody > :gt(0)").remove().end()

    for (var i = 1; i <= response.data.last_page; i++) {
      fieldPage.append(
        $('<li><a class="paginate_datatable" data-page="'+i+'">'+i+'</a></li>')
      )
    }
    $.each(response.data.data, function(index, value){
      dataIndex = (page*length)-length+(index+1);
      $("#datatable_data").clone().removeAttr("style").attr("data", dataIndex).appendTo("#datatable_manual > table > tbody")
      $.each(value, function(index,value){
        var td = $("tr[data="+dataIndex+"]").find("[data-for='"+index+"']")
        var target = td.attr("data-target")
        if (target == 'html') {
          td.html(value)
        }else if (target == 'src') {
          td.attr('src', value)
        }
      })
    })
    return response.data
  })
}
