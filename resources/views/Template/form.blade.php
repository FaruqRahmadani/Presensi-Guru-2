@extends('Layouts/master')
@section('content-heading','Template Form')
@section('content')
<div class="container-fluid">
    <div class="card card-default">
        <div class="card-header">
            <div class="card-title">Horizontal Form</div>
        </div>
        <div class="card-body">
            <form class="form-horizontal">
					<legend>Input</legend>
					<div class="form-group row">
						<label class="col-xl-2 col-form-label">Input with help</label>
						<div class="col-xl-10">
							<input class="form-control" type="text" placeholder="text">
							<span class="form-text">A block of help text that breaks onto a new line and may extend beyond one line.</span>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-xl-2 col-form-label">Input without help</label>
						<div class="col-xl-10">
							<input class="form-control" type="text" placeholder="text">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-xl-2 col-form-label">Textarea</label>
						<div class="col-xl-10">
							<textarea name="" id="" rows="3" class="form-control"></textarea>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-md-2 col-form-label">Select</label>
						<div class="col-md-10">
							<select class="custom-select custom-select-md">
								<option selected="">Open this select menu</option>
								<option value="1">One</option>
								<option value="2">Two</option>
								<option value="3">Three</option>
							</select>
						</div>
					</div>
					<legend>Other Input</legend>
					<div class="form-group row">
						<label class="col-md-2 col-form-label">Checkboxes and radios</label>
						<div class="col-md-10">
							<div class="form-check">
								<input class="form-check-input" id="defaultCheck1" type="checkbox" value="">
								<label class="form-check-label" for="defaultCheck1">Default checkbox</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" id="defaultCheck2" type="checkbox" value="" disabled="">
								<label class="form-check-label" for="defaultCheck2">Disabled checkbox</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" id="exampleRadios1" type="radio" name="exampleRadios" value="option1" checked="">
								<label class="form-check-label" for="exampleRadios1">Default radio</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" id="exampleRadios2" type="radio" name="exampleRadios" value="option2">
								<label class="form-check-label" for="exampleRadios2">Second default radio</label>
							</div>
							<div class="form-check disabled">
								<input class="form-check-input" id="exampleRadios3" type="radio" name="exampleRadios" value="option3" disabled="">
								<label class="form-check-label" for="exampleRadios3">Disabled radio</label>
							</div>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-md-2 col-form-label">Inline checkboxes and Radios</label>
						<div class="col-md-10">
							<div class="form-check form-check-inline">
								<input class="form-check-input" id="inlineCheckbox1" type="checkbox" value="option1">
								<label class="form-check-label" for="inlineCheckbox1">1</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" id="inlineCheckbox2" type="checkbox" value="option2">
								<label class="form-check-label" for="inlineCheckbox2">2</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" id="inlineCheckbox3" type="checkbox" value="option3" disabled="">
								<label class="form-check-label" for="inlineCheckbox3">3 (disabled)</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" id="inlineRadio1" type="radio" name="inlineRadioOptions" value="option1">
								<label class="form-check-label" for="inlineRadio1">1</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" id="inlineRadio2" type="radio" name="inlineRadioOptions" value="option2">
								<label class="form-check-label" for="inlineRadio2">2</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" id="inlineRadio3" type="radio" name="inlineRadioOptions" value="option3" disabled="">
								<label class="form-check-label" for="inlineRadio3">3 (disabled)</label>
							</div>
						</div>
					</div>
					<div class="form-group row">
						<div class="col-xl-10">
							<div class="checkbox c-checkbox">
								<label>
									<input type="checkbox" checked="">
									<span class="fa fa-check"></span> Remember me</label>
								</div>
							</div>
						</div>
						<div class="form-group row">
							<div class="col-xl-10">
								<button class="btn btn-sm btn-info" type="submit">Simpan</button>
							</div>
						</div>
					</form>
        </div>
    </div>
</div>
@endsection