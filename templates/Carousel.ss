<div class="html_carousel">
	<div id="Carousel">
			<% control Carousels %>
				<% if Image %>
					<div class="slide">
						<% if LinkTo %>
							<a href="$LinkTo.Link" title="$Title">
								$Image.CarouselImageSize
							</a>
						<% else %>
								$Image.CarouselImageSize
						<% end_if %>
							<div>
								<h4>$Title</h4>
								<% if HTMLDescription %>
								$HTMLDescription
								<% else %>
								<p>$Description</p>
								<% end_if %>
									<% if LinkTo %>
									<p>
										<a href="$LinkTo.Link" title="$Title" class="RMT">
											Viac info
										</a>
									</p>
									<% end_if %>
							</div>
					</div>
				<% end_if %>
			<% end_control %>
	</div>
	<div id="Carousel_pager"></div>
</div>