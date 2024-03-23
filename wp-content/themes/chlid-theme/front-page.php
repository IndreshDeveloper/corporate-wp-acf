<?php
/**
 * The Front Page template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header(); ?>

<?php
$banner_title = get_field('banner_title');
$banner_description = get_field('banner_description');
$banner_button = get_field('banner_button');
$banner_image = get_field('banner_image');
?>
<?php if ($banner_title || $banner_description || $banner_button || $banner_image): ?>
	<section class="banner_section">
		<div class="container">
			<div class="banner-row d-flex align-items-center f-wrap">
				<?php if ($banner_title || $banner_description || $banner_button || $banner_image): ?>
					<div class="banner-col banner-text-block">
						<?php if ($banner_title): ?>
							<h1>
								<?php echo $banner_title; ?>
							</h1>
						<?php endif; ?>
						<?php if ($banner_description): ?>
							<p>
								<?php echo $banner_description; ?>
							</p>
						<?php endif; ?>
						<?php if ($banner_button): ?>
							<a class="btn banner-btn" href="<?php echo $banner_button['url']; ?>"
								target="<?php echo $banner_button['target']; ?>">
								<?php echo $banner_button['title']; ?>
							</a>
						<?php endif; ?>
					</div>
					<div class="banner-image banner-col">
						<?php if ($banner_image): ?>
							<img src="<?php echo $banner_image['url']; ?>" alt="<?php echo $banner_image['alt']; ?>">
						<?php endif; ?>
					</div>
				</div>
			<?php endif; ?>
		</div>
	</section>
<?php endif; ?>

<?php
$sub_title_s1 = get_field('sub_title_s1');
$title_s1 = get_field('title_s1');
?>
<?php if ($sub_title_s1 || $title_s1): ?>
	<section class="features-section">
		<div class="container">
			<?php if ($sub_title_s1 || $title_s1): ?>
				<div class="features-textblock">
					<?php if ($sub_title_s1): ?>
						<h5>
							<?php echo $sub_title_s1; ?>
						</h5>
					<?php endif; ?>
					<?php if ($title_s1): ?>
						<h3>
							<?php echo $title_s1; ?>
						</h3>
					<?php endif; ?>
				</div>
			<?php endif; ?>

			<?php if (have_rows('feature_content_list')): ?>
				<div class="feature-row d-flex align-items-center f-wrap justify-center">
					<?php while (have_rows('feature_content_list')):
						the_row();
						$image_title = get_sub_field('image_title');
						$content_title = get_sub_field('content_title');
						$content_description = get_sub_field('content_description');
						?>
						<?php if ($image_title || $content_title || $content_description): ?>
							<div class="feature-col features-text">
								<?php if ($image_title): ?>
									<img src="<?php echo $image_title['url']; ?>" alt="<?php echo $image_title['alt']; ?>">
								<?php endif; ?>
								<?php if ($content_title): ?>
									<h4>
										<?php echo $content_title; ?>
									</h4>
								<?php endif; ?>
								<?php if ($content_description): ?>
									<p>
										<?php echo $content_description; ?>
									</p>
								<?php endif; ?>
							</div>
						<?php endif; ?>
					<?php endwhile; ?>
				</div>
			<?php endif; ?>
		</div>
	</section>
<?php endif; ?>


<?php
$sub_title_s2 = get_field('sub_title_s2');
$title_s2 = get_field('title_s2');
$description_s2 = get_field('description_s2');
$market_button = get_field('market_button');
?>
<?php if ($sub_title_s2 || $title_s2 || $description_s2 || $market_button): ?>
	<section class="marketing-section">
		<div class="container">
			<div class="marketing-row d-flex f-wrap align-items-center">
				<div class="m-col-block left-block">
					<?php while (have_rows('market_image_content')):
						the_row();
						$market_image_s2 = get_sub_field('market_image_s2');
						?>
						<?php if ($market_image_s2): ?>
							<div class="market-img-block">
								<img src="<?php echo $market_image_s2['url']; ?>" alt="<?php echo $market_image_s2['alt']; ?>">
							</div>
						<?php endif; ?>
					<?php endwhile; ?>
				</div>
				<?php if ($sub_title_s2 || $title_s2 || $description_s2 || $market_button): ?>
					<div class="m-col-block right-block">
						<?php if ($sub_title_s2): ?>
							<h5>
								<?php echo $sub_title_s2; ?>
							</h5>
						<?php endif; ?>
						<?php if ($title_s2): ?>
							<h2>
								<?php echo $title_s2; ?>
							</h2>
						<?php endif; ?>
						<?php if ($description_s2): ?>
							<p>
								<?php echo $description_s2; ?>
							</p>
						<?php endif; ?>
						<?php if ($market_button): ?>
							<a class="btn market-btn" href="tel:<?php echo $market_button['url']; ?>"
								target="<?php echo $market_button['target']; ?>">
								<?php echo $market_button['title']; ?>
							</a>
						<?php endif; ?>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</section>
<?php endif; ?>

<?php
$sub_tiltle_s3 = get_field('sub_tiltle_s3');
$title_s3 = get_field('title_s3');
?>
<?php if ($sub_tiltle_s3 || $title_s3): ?>
	<section class="services-section">
		<div class="container text-block">
			<?php if ($sub_tiltle_s3 || $title_s3): ?>
				<?php if ($sub_tiltle_s3): ?>
					<h5>
						<?php echo $sub_tiltle_s3; ?>
					</h5>
				<?php endif; ?>
				<?php if ($title_s3): ?>
					<h2>
						<?php echo $title_s3; ?>
					</h2>
				<?php endif; ?>
			<?php endif; ?>
			<div class="services-row d-flex justify-center f-wrap">
				<?php while (have_rows('technical_content_list')):
					the_row();
					$technical_image = get_sub_field('technical_image');
					$tech_content_title = get_sub_field('tech_content_title');
					$tech_content_description = get_sub_field('tech_content_description');
					?>
					<?php if ($technical_image || $tech_content_title || $tech_content_description): ?>
						<div class="services-main-block">
							<?php if ($technical_image): ?>
								<div class="services-img-block">
									<img src="<?php echo $technical_image['url']; ?>" alt="<?php echo $technical_image['alt']; ?>">
								</div>
							<?php endif; ?>
							<div class="services-text-block">
								<?php if ($tech_content_title): ?>
									<h4>
										<?php echo $tech_content_title; ?>
									</h4>
								<?php endif; ?>
								<?php if ($tech_content_description): ?>
									<p>
										<?php echo $tech_content_description; ?>
									</p>
								<?php endif; ?>
							</div>
						</div>
					<?php endif; ?>
				<?php endwhile; ?>
			</div>
		</div>
	</section>
<?php endif; ?>

<?php
$finance_image_s4 = get_field('finance_image_s4');
$sub_title_s4 = get_field('sub_title_s4');
$title_s4 = get_field('title_s4');
$description_s4 = get_field('description_s4');
?>
<?php if ($finance_image_s4 || $sub_title_s4 || $title_s4 || $description_s4): ?>
	<section class="Get-to-work">
		<div class="container">
			<?php if ($finance_image_s4 || $sub_title_s4 || $title_s4 || $description_s4): ?>
				<div class="work-row d-flex f-wrap">
					<div class="get-work-col">
						<?php if ($finance_image_s4): ?>
							<div class="get-img-block">
								<img src="<?php echo $finance_image_s4['url']; ?>" alt="<?php echo $finance_image_s4['alt']; ?>">
							</div>
						<?php endif; ?>
					</div>
					<div class="get-work-col">
						<div class="get-text-block">
							<?php if ($sub_title_s4): ?>
								<h5>
									<?php echo $sub_title_s4; ?>
								</h5>
							<?php endif; ?>
							<?php if ($title_s4): ?>
								<h2>
									<?php echo $title_s4; ?>
								</h2>
							<?php endif; ?>
							<?php if ($description_s4): ?>
								<p>
									<?php echo $description_s4; ?>
								</p>
							<?php endif; ?>
						</div>
						<div class="list-menu">
							<?php while (have_rows('list_content_menu')):
								the_row();
								$list_content = get_sub_field('list_content');
								?>
								<?php if ($list_content): ?>
									<?php if ($list_content): ?>
										<li>
											<?php echo $list_content; ?>
										</li>
									<?php endif; ?>
								<?php endif; ?>
							<?php endwhile; ?>
						</div>
					</div>
				</div>
			<?php endif; ?>
		</div>
	</section>
<?php endif; ?>

<?php
$g_sub_title_s5 = get_field('g_sub_title_s5');
$g_title_s5 = get_field('g_title_s5');
?>
<?php if ($g_sub_title_s5 || $g_title_s5): ?>
	<section class="global-project">
		<?php if ($g_sub_title_s5): ?>
			<h5>
				<?php echo $g_sub_title_s5; ?>
			</h5>
		<?php endif; ?>
		<?php if ($g_title_s5): ?>
			<h2>
				<?php echo $g_title_s5; ?>
			</h2>
		<?php endif; ?>
		<div class="global-row d-flex f-wrap">
			<?php while (have_rows('project_main_block')):
				the_row();
				$g_project_image = get_sub_field('g_project_image');
				$g_project_content_s5 = get_sub_field('g_project_content_s5');
				$g_project_description_s5 = get_sub_field('g_project_description_s5');
				?>
				<?php if ($g_project_image || $g_project_content_s5 || $g_project_description_s5): ?>
					<div class="global-main-block">
						<?php if ($g_project_image): ?>
							<div class="global-img-block">
								<img src="<?php echo $g_project_image['url']; ?>" alt="<?php echo $g_project_image['alt']; ?>">
							</div>
						<?php endif; ?>
						<div class="g-text-block">
							<?php if ($g_project_content_s5): ?>
								<h4>
									<?php echo $g_project_content_s5; ?>
								</h4>
							<?php endif; ?>
							<?php if ($g_project_description_s5): ?>
								<p>
									<?php echo $g_project_description_s5; ?>
								</p>
							<?php endif; ?>
						</div>
					</div>
				<?php endif; ?>
			<?php endwhile; ?>
		</div>
	</section>
<?php endif; ?>

<?php
$consultation_image = get_field('consultation_image');
$title_s6 = get_field('title_s6');
$consultation_button = get_field('consultation_button');
?>
<?php if ($consultation_image || $consultation_button || $consultation_button): ?>
	<section class="consultation-section">
		<div class="cons-img-block">
			<?php if ($consultation_image): ?>
				<img src="<?php echo $consultation_image['url']; ?>" alt="<?php echo $consultation_image['alt']; ?>">
			<?php endif; ?>
			<div class="ib">
				<div class="container">
					<div class="consultation-row">
						<div class="consultation-text-block d-flex align-items-center">
							<?php if ($title_s6): ?>
								<h4>
									<?php echo $title_s6; ?>
								</h4>
							<?php endif; ?>
							<?php if ($consultation_button): ?>
								<a class="consultation-btn btn" href="<?php echo $consultation_button['url']; ?>"
									target="<?php echo $consultation_button['target']; ?>">
									<?php echo $consultation_button['title']; ?>
								</a>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php endif; ?>

<?php
$team_sub_title_s7 = get_field('team_sub_title_s7');
$team_title_s7 = get_field('team_title_s7');
?>
<?php if ($team_sub_title_s7 || $team_title_s7): ?>
	<section class="our-team-section">
		<div class="container">
			<?php if ($team_sub_title_s7 || $team_title_s7): ?>
				<div class="team-text-block">
					<?php if ($team_sub_title_s7): ?>
						<h5>
							<?php echo $team_sub_title_s7; ?>
						</h5>
					<?php endif; ?>
					<?php if ($team_title_s7): ?>
						<h3>
							<?php echo $team_title_s7; ?>
						</h3>
					<?php endif; ?>
				</div>
			<?php endif; ?>
			<div class="team-row d-flex f-wrap">
				<?php while (have_rows('team_block_s7')):
					the_row();
					$team_image_s7 = get_sub_field('team_image_s7');
					$team_list_title_s7 = get_sub_field('team_list_title_s7');
					$team_list_sub_title_s7 = get_sub_field('team_list_sub_title_s7');
					?>
					<?php if ($team_image_s7 || $team_list_title_s7 || $team_list_sub_title_s7): ?>
						<div class="team-member-info">
							<div class="team-img-block">
								<?php if ($team_image_s7): ?>
									<img src="<?php echo $team_image_s7['url']; ?>" alt="<?php echo $team_image_s7['alt']; ?>">
								<?php endif; ?>
							</div>
							<?php if ($team_list_title_s7): ?>
								<h5>
									<?php echo $team_list_title_s7; ?>
								</h5>
							<?php endif; ?>
							<?php if ($team_list_sub_title_s7): ?>
								<span>
									<?php echo $team_list_sub_title_s7; ?>
								</span>
							<?php endif; ?>
						</div>
					<?php endif; ?>
				<?php endwhile; ?>
			</div>
		</div>
	</section>
<?php endif; ?>

<?php
$article_title_s8 = get_field('article_title_s8');
$article_description_s8 = get_field('article_description_s8');
$article_button = get_field('article_button');
?>
<?php if ($article_title_s8 || $article_description_s8 || $article_button): ?>
	<section class="weekly-article">
		<div class="container">
			<?php if ($article_title_s8 || $article_description_s8 || $article_button): ?>
				<div class="article-row d-flex align-items-center justify-center">
					<div class="article-text-block">
						<?php if ($article_title_s8): ?>
							<h4>
								<?php echo $article_title_s8; ?>
							</h4>
						<?php endif; ?>
						<?php if ($article_description_s8): ?>
							<p>
								<?php echo $article_description_s8; ?>
							</p>
						<?php endif; ?>
					</div>
					<div class="article-btn">
						<a class="btn" href="<?php echo $article_button['url']; ?>"
							target="<?php echo $article_button['target']; ?>">
							<?php echo $article_button['title']; ?>
						</a>
					</div>
				</div>
			<?php endif; ?>
		</div>
	</section>
<?php endif; ?>

<!-- <?php
$args = array(
	'post_type' => 'post',
	'posts_per_page' => 2,
	'post_status' => 'publish'
);
$our_post = new WP_Query($args);
?>

<section class="blog-section">
	<div class="container">
		<?php if ($our_post->have_posts()): ?>
			<div class="blog-list">
				<?php while ($our_post->have_posts()):
					$our_post->the_post(); ?>

					<div class="blog-item">
						<?php if (has_post_thumbnail()) {
							$postImageId = get_post_thumbnail_id($post);
							$postImage = acf_field_attachment_image($postImageId, 'full');
							?>
							<div class="img-cover">
								<a href="<?php echo get_permalink(); ?>">
									<?php echo $postImage; ?>
								</a>
							</div>
						<?php } ?>
						<div class="post-content-info">
							<div class="category">
								<?php foreach ((get_the_category()) as $category) {
									echo $category->cat_name . ' ';
								} ?>
							</div>
							<div class="post-date">
								<span class="date">
									<?php echo get_the_date('d M, Y'); ?>
								</span>
								<strong class="author">
									<?php echo get_the_author(); ?>
								</strong>
							</div>
							<h2>
								<?php echo get_the_title(); ?>
							</h2>
							<p>
								<?php echo get_the_excerpt(); ?>
							</p>
							<a class="text-link" href="<?php echo get_permalink(); ?>">Read More
								<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
							</a>
						</div>
					</div>
				<?php endwhile;
				wp_reset_query(); ?>
			</div>
		<?php endif; ?>
	</div>

</section> -->

<?php get_footer(); ?>