<?php include("includes/header.php") ?> 

<div class="inner-contact-wrap">
	<div class="container">
		<h1 class="mainheading text-center">
			Visa Request <span>We are here to help you</span>
		</h1>
		<div class="form-wrapper-wrap">
						<p class="success-message"></p>
			<form action="#" class="" method="POST" style="padding-bottom: 20px;" id="visa_request" autocomplete="off">
				<input type="hidden" name="csrf_token" value="95f30bca2496304c29a67c6b8c328e0c" />
								<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label class="">Visa Type</label>
							<select class="form-control" name="visa_type">
								<option value="Tourist Visa">Tourist Visa</option>
								<option value="Student Visa">Student Visa</option>
								<option value="Business Visa">Business Visa (Invitation Letter from the Foreign Company is mandatory)</option>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label class="">Visa Country</label> <input type="text" name="country" class="form-control" placeholder="Please enter country name" autocomplete="nope">
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<label class="">How many people are travelling?</label>
							<select class="form-control" name="traveller_people">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5 or more">5 or more</option>
							</select>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<label class="">How soon do you plan to travel?</label>
							<select class="form-control" name="traveller_plan">
								<option value="Within 2 weeks">Within 2 weeks</option>
								<option value="Within 1 Month">Within 1 Month</option>
								<option value="Within 2 Months">Within 2 Months</option>
								<option value="Within 3 Months">Within 3 Months</option>
								<option value="After 3 Months">After 3 Months</option>
							</select>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<label class="">Contact Number</label>
							<input type="text" name="mobile" class="form-control" placeholder="Please enter Contact Number" autocomplete="nope">
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<label class="">Contact Email</label>
							<input type="text" name="email" class="form-control" placeholder="Please enter Contact Email" autocomplete="nope">
						</div>
					</div>
					<div class="col-md-12">
						<div class="form-group">
							<label class="">Your Message</label>
							<textarea name="message" class="form-control" placeholder="write your message or ask questions..."></textarea>
						</div>
					</div>
					<div class="col-md-12">
						<div class="form-group text-center">
							<button type="submit" class="btn btn-com">Submit</button>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>


<?php include("includes/footer.php") ?> 