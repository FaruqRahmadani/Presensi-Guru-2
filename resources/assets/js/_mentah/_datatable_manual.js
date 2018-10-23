$("#visTable").ready(function(){
  getData($("#visTable > table").attr("data-url"))
})

$("#data_length").change(function(){
  getData($("#visTable > table").attr("data-url"), $(this).val())
})

$("#page").on("click", ".paginate_datatable", function(){
  var dataPage = $(this).attr('data-page')
  var dataLength = $("#data_length").val()
  getData($("#visTable > table").attr("data-url"), dataLength, dataPage)
})

function getData(url, length=10, page=1){
  var fieldPage = $("#visTable > #page")
  var datatableRow = $("#table_data");
  datatableRow.attr("style", "display:none")
  axios({
    method: 'get',
    url: url+'/'+length+'?page='+page,
  }).then((response) => {
    fieldPage.find('li').remove().end()
    $("#visTable > table > tbody > :gt(0)").remove().end()
    for (var i = 1; i <= response.data.last_page; i++) {
      fieldPage.append(
        $('<li><a class="paginate_datatable" data-page="'+i+'">'+i+'</a></li>')
      )
    }
    $.each(response.data.data, function(index, value){
      dataIndex = (page*length)-length+(index+1);
      $("#table_data").clone().removeAttr("style").attr("data", dataIndex).appendTo("#visTable > table > tbody")
      $.each(value, function(index,value){
        var tr = $("tr[data="+dataIndex+"]")
        var elementTarget = tr.find("[data-for='"+index+"']")
        var dataTarget = elementTarget.attr("data-target")||'html'
        var indexTarget = tr.find("[data-for='index']")
        if (indexTarget) indexTarget.html(dataIndex)
        setData(elementTarget, dataTarget, value)
      })
    })
    return response.data
  })
}

function setData(elementTarget, dataTarget, value){
  if (dataTarget == 'html') elementTarget.html(value)
  else elementTarget.attr(dataTarget, value)
}
