<div class="html_carousel">
	<div id="Carousel">
			<% control Carousels %>
				<% if Image %>
					<div class="slide">
						<% if LinkTo %>
							<a href="$Link" title="$Title">
								$Image.CarouselImageSize
							</a>
						<% else %>
								$Image.CarouselImageSize
						<% end_if %>
							<div>
								<h4>$Title</h4>
								<p>$Description</p>
							</div>
					</div>
				<% end_if %>
			<% end_control %>
	</div>
</div>