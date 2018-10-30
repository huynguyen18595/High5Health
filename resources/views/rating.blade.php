@extends('layouts.general')

@section('content')
<!-- wrtie ur design here -->


<script type="text/javascript">
	$(document)
	.ready(function(){
		$(".rating").rating();
	});
</script>

<div class="container">
	<div class="notification">
		<h3 class="title is-3">
			<center>Overall Rating
			</center>
		</h3>
		<div class="box">
			<article class="media">
				<div class="media-left">
					<figure class="image is-180x150">
						<img src="https://bulma.io/images/placeholders/128x128.png" alt="Image">
					</figure>
				</div>

				<div class="media-content">
					<div class="content">
						<p>
							<h4 class="title is-4">The Wesley Hospital</h4>

							<table class="table">
								<tr>
									<th>
										Effectiveness
									</th>
									<td>4.8/5.0</td>
									<td><div class="ui heart rating disabled" data-rating="5" data-max-rating="5"></div></td>
								</tr>

								<tr>
									<th>
										Friendliness
									</th>
									<td>4.9/5.0</td>
									<td><div class="ui heart rating disabled" data-rating="5" data-max-rating="5"></div></td>
								</tr>

								<tr>
									<th>
										Cost-benefit
									</th>
									<td>5.0/5.0</td>
									<td><div class="ui heart rating" data-rating="5" data-max-rating="5"></div></td>
								</tr>

								<tr>
									<th>
										Convenience
									</th>
									<td>4.9/5.0</td>
									<td><div class="ui heart rating" data-rating="5" data-max-rating="5"></div></td>
								</tr>

								<tr>
									<th>
										Health benefit
									</th>
									<td>5.0/5.0</td>
									<td><div class="ui heart rating" data-rating="5" data-max-rating="5"></div></td>
								</tr>
							</table>
						</p>
					</div>
				</div>
			</article>
		</div>
	</div>
</div>



<div class="container">
	<div class="notification">
		<h3 class="title is-3">
			<center>Service Details
			</center>
		</h3>
		<div class="box">

			<div class="field">
				<label class="label">Service Name</label>
				<div class="control">
					<input class="input" type="SerName" placeholder="e.g Dermatologist">
				</div>
			</div>

			<div class="field">
				<label class="label">Doctor Name</label>
				<div class="control">
					<input class="input" type="DocName" placeholder="e.g. Mark John">
				</div>
			</div>

			<div class="field">
				<label class="label">Service Date</label>
				<div class="control">
					<input class="input" type="SerDate" placeholder="e.g. ddmmyyyy">
				</div>
			</div>

			<div class="field">
				<label class="label">Service Cost</label>
				<div class="control">
					<input class="input" type="SerCost" placeholder="e.g. 200.00">
				</div>
			</div>
		</div>




	</div>
</div>


<div class="container">
	<div class="notification">
		<h3 class="title is-3">
			<center>Rate Your Service!
			</center>
		</h3>

		<div class="box">
			<center>
				<table class="table">
					<tr>
						<th>
							Effectiveness
						</th>
						<td>
							<div class="ui heart rating" data-rating="0" data-max-rating="5"></div>
						</td>
					</tr>
					<tr>
						<th>
							Friendliness
						</th>
						<td>
							<div class="ui heart rating" data-rating="0" data-max-rating="5"></div>
						</td>
					</tr>
					<tr>
						<th>
							Cost-benefit
						</th>
						<td>
							<div class="ui heart rating" data-rating="0" data-max-rating="5"></div>
						</td>
					</tr>
					<tr>
						<th>
							Convenience
						</th>
						<td>
							<div class="ui heart rating" data-rating="0" data-max-rating="5"></div>
						</td>
					</tr>
					<tr>
						<th>
							Health benefit
						</th>
						<td>
							<div class="ui heart rating" data-rating="0" data-max-rating="5"></div>
						</td>
					</tr>
				</table>
			</center>
			<br>
			<br>
			<center><h5 class="subtitle is-5">Comments</h5></center>
			<br>
			<div class="control">
				<textarea class="textarea" type="text" placeholder="Leave your comments here.">
				</textarea>
			</div>
			<br>
			<br>
			<div class="field is-grouped is-grouped-centered">
				<p class="control">
					<a class="button is-primary">
						Submit
					</a>
				</p>
				<p class="control">
					<a class="button is-light">
						Cancel
					</a>
				</p>
			</div>
		</div>
	</div>
</div>



@endsection
