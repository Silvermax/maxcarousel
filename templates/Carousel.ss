<div class="html_carousel">
	<div id="Carousel">
			<% control Carousels %>
				<% if MaxCarouselImage %>
					<div class="slide">
						<% if Link %>
							<a href="$Link" title="$Title">
								$MaxCarouselImage.CarouselImageSize
							</a>
						<% else %>
								$MaxCarouselImage.CarouselImageSize
						<% end_if %>
							<div>
								<h4>$Title</h4>
								<% if HTMLDescription %>
								$HTMLDescription
								<% else %>
								<p>$Description</p>
								<% end_if %>
									<% if Link %>
									<p>
										<a href="$Link" title="$Title" class="RMT">
											Viac info
										</a>
									</p>
									<% end_if %>
							</div>
					</div>
				<% end_if %>
			<% end_control %>
	</div>
</div>