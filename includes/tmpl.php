<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">

<head>
	<meta charset="utf-8">
	<title><?php echo $head["title"]; ?></title>

	<link rel="stylesheet" media="screen" href="<?php echo $currentStyleSheet; ?>?v=8may2013">
	<link rel="alternate" type="application/rss+xml" title="RSS" href="<?php echo $zenUrls["zen-rss"]; ?>">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="Dave Shea">
	<meta name="description" content="<?php echo $head["description"]; ?>">
	<meta name="robots" content="all">

	<?php if ($typekitId) { ?>
		<script src="http://use.typekit.net/<?php echo $typekitId; ?>.js"></script>
		<script>
			try {
				Typekit.load();
			} catch (e) {}
		</script>
	<?php } ?>

	<link rel="stylesheet" media="screen" href="/accessibility-menu.css" />

	<!--[if lt IE 9]>
	<script src="script/html5shiv.js"></script>
	<![endif]-->
</head>

<!--

<?php echo $head["comment"]; ?>

-->

<body id="css-zen-garden">
	<nav id="skip-menu" role="navigation" aria-label="Skip Content menu">
		<div class="skip-menu">
			<ul id="menu-skip-menu" class="menu">
				<li class="menu-item">
					<a href="#zen-summary">Skip to content</a>
				</li>
				<li class="menu-item">
					<a href="#block_accessibility">Skip to accessibility menu</a>
				</li>
				<li class="menu-item">
					<a href="#top-menu">Skip to main menu</a>
				</li>
				<li class="menu-item">
					<a href="#footer">Skip to footer</a>
				</li>
			</ul>
		</div>
	</nav>

	<div class="block-accessibility-wrapper">
		<div id="block_accessibility" class="block_accessibility_settings">
			<a id="accessibility_settings_open_close" tabindex="0">
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" fill="currentColor" width="2em">
					<path d="M50 8.1c23.2 0 41.9 18.8 41.9 41.9 0 23.2-18.8 41.9-41.9 41.9C26.8 91.9 8.1 73.2 8.1 50S26.8 8.1 50 8.1M50 0C22.4 0 0 22.4 0 50s22.4 50 50 50 50-22.4 50-50S77.6 0 50 0zm0 11.3c-21.4 0-38.7 17.3-38.7 38.7S28.6 88.7 50 88.7 88.7 71.4 88.7 50 71.4 11.3 50 11.3zm0 8.9c4 0 7.3 3.2 7.3 7.3S54 34.7 50 34.7s-7.3-3.2-7.3-7.3 3.3-7.2 7.3-7.2zm23.7 19.7c-5.8 1.4-11.2 2.6-16.6 3.2.2 20.4 2.5 24.8 5 31.4.7 1.9-.2 4-2.1 4.7-1.9.7-4-.2-4.7-2.1-1.8-4.5-3.4-8.2-4.5-15.8h-2c-1 7.6-2.7 11.3-4.5 15.8-.7 1.9-2.8 2.8-4.7 2.1-1.9-.7-2.8-2.8-2.1-4.7 2.6-6.6 4.9-11 5-31.4-5.4-.6-10.8-1.8-16.6-3.2-1.7-.4-2.8-2.1-2.4-3.9.4-1.7 2.1-2.8 3.9-2.4 19.5 4.6 25.1 4.6 44.5 0 1.7-.4 3.5.7 3.9 2.4.7 1.8-.3 3.5-2.1 3.9z">
					</path>
				</svg>
			</a>
			<div class="open-accessibility">
				<ul aria-label="Font Family :">
					<li>
						<button class="lab-link-default">
							<span>Libre Baskerville</span>
						</button>
					</li>
					<li>
						<button class="lab-font-inter">
							<span>Open Sans</span>
						</button>
					</li>
					<li>
						<button class="lab-font-opendyslexic">
							<span>OpenDyslexic</span>
						</button>
					</li>
				</ul>
				<ul aria-label="Font Settings :">
					<li>
						<button class="font-settings lab-font-smaller">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
								<path d="M 16 3 C 8.832031 3 3 8.832031 3 16 C 3 23.167969 8.832031 29 16 29 C 23.167969 29 29 23.167969 29 16 C 29 8.832031 23.167969 3 16 3 Z M 16 5 C 22.085938 5 27 9.914063 27 16 C 27 22.085938 22.085938 27 16 27 C 9.914063 27 5 22.085938 5 16 C 5 9.914063 9.914063 5 16 5 Z M 10 15 L 10 17 L 22 17 L 22 15 Z"></path>
							</svg>
							<span>Smaller</span>
						</button>
					</li>
					<li>
						<button class="font-settings lab-font-larger">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
								<path d="M 16 3 C 8.832031 3 3 8.832031 3 16 C 3 23.167969 8.832031 29 16 29 C 23.167969 29 29 23.167969 29 16 C 29 8.832031 23.167969 3 16 3 Z M 16 5 C 22.085938 5 27 9.914063 27 16 C 27 22.085938 22.085938 27 16 27 C 9.914063 27 5 22.085938 5 16 C 5 9.914063 9.914063 5 16 5 Z M 15 10 L 15 15 L 10 15 L 10 17 L 15 17 L 15 22 L 17 22 L 17 17 L 22 17 L 22 15 L 17 15 L 17 10 Z"></path>
							</svg>
							<span>Larger</span>
						</button>
					</li>
					<li>
						<button class="font-settings lab-link-underline">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
								<path d="M 21.75 4 C 20.078125 4 18.492188 4.660156 17.3125 5.84375 L 15.84375 7.3125 C 14.660156 8.496094 14 10.078125 14 11.75 C 14 12.542969 14.152344 13.316406 14.4375 14.03125 L 16.0625 12.40625 C 15.859375 11.109375 16.253906 9.714844 17.25 8.71875 L 18.71875 7.25 C 19.523438 6.445313 20.613281 6 21.75 6 C 22.886719 6 23.945313 6.445313 24.75 7.25 C 26.410156 8.910156 26.410156 11.621094 24.75 13.28125 L 23.28125 14.75 C 22.476563 15.554688 21.386719 16 20.25 16 C 20.027344 16 19.808594 15.976563 19.59375 15.9375 L 17.96875 17.5625 C 18.683594 17.847656 19.457031 18 20.25 18 C 21.921875 18 23.507813 17.339844 24.6875 16.15625 L 26.15625 14.6875 C 27.339844 13.503906 28 11.921875 28 10.25 C 28 8.578125 27.339844 7.027344 26.15625 5.84375 C 24.976563 4.660156 23.421875 4 21.75 4 Z M 19.28125 11.28125 L 11.28125 19.28125 L 12.71875 20.71875 L 20.71875 12.71875 Z M 11.75 14 C 10.078125 14 8.492188 14.660156 7.3125 15.84375 L 5.84375 17.3125 C 4.660156 18.496094 4 20.078125 4 21.75 C 4 23.421875 4.660156 24.972656 5.84375 26.15625 C 7.023438 27.339844 8.578125 28 10.25 28 C 11.921875 28 13.507813 27.339844 14.6875 26.15625 L 16.15625 24.6875 C 17.339844 23.503906 18 21.921875 18 20.25 C 18 19.457031 17.847656 18.683594 17.5625 17.96875 L 15.9375 19.59375 C 16.140625 20.890625 15.746094 22.285156 14.75 23.28125 L 13.28125 24.75 C 12.476563 25.554688 11.386719 26 10.25 26 C 9.113281 26 8.054688 25.554688 7.25 24.75 C 5.589844 23.089844 5.589844 20.378906 7.25 18.71875 L 8.71875 17.25 C 9.523438 16.445313 10.613281 16 11.75 16 C 11.972656 16 12.191406 16.023438 12.40625 16.0625 L 14.03125 14.4375 C 13.316406 14.152344 12.542969 14 11.75 14 Z"></path>
							</svg>
							<span>Links Underline</span>
						</button>
					</li>
					<li>
						<button class="font-settings lab-font-readable">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
								<path d="M 8 6 L 8 8 L 15 8 L 15 22 L 17 22 L 17 8 L 24 8 L 24 6 Z M 10 21.5 L 5.625 25 L 10 28.5 L 10 26 L 22 26 L 22 28.5 L 26.375 25 L 22 21.5 L 22 24 L 10 24 Z"></path>
							</svg>
							<span>Readable</span>
						</button>
					</li>

					<li>
						<button class="font-settings lab-reset">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
								<path d="M 16 3 C 8.832031 3 3 8.832031 3 16 C 3 23.167969 8.832031 29 16 29 C 23.167969 29 29 23.167969 29 16 L 27 16 C 27 22.085938 22.085938 27 16 27 C 9.914063 27 5 22.085938 5 16 C 5 9.914063 9.914063 5 16 5 C 19.875 5 23.261719 6.984375 25.21875 10 L 20 10 L 20 12 L 28 12 L 28 4 L 26 4 L 26 7.71875 C 23.617188 4.84375 20.019531 3 16 3 Z"></path>
							</svg>
							<span>Reset all</span>
						</button>
					</li>

				</ul>
			</div>
		</div>
	</div>

	<nav class="top-menu" id="top-menu">
		<ul>
			<li><a href='/' title="Accueil"><img alt="Logo csszengarden" src="https://pbs.twimg.com/profile_images/378800000150126955/88cf42bd19a9d7fd03e41710b5d76eb2_400x400.png" style="height:30px;position:relative;top:-7px;" /></a></li>
			<li><a href='/pages/translations/' title="<?= $sidebar["zen-translations-text"] ?>"><?= $sidebar["zen-translations-text"] ?></a></li>
			<li><a href='/pages/alldesigns/' title="<?= $sidebar["design-archives-viewall-text"] ?>"><?= $sidebar["design-archives-viewall-text"] ?></a></li>
			<li><a href="#top-menu" title="Contact">Contact</a></li>
		</ul>
	</nav>

	<div class="page-wrapper">

		<section class="intro" id="zen-intro">
			<header role="banner">
				<h1><?php echo $intro["h1"]; ?></h1>
				<h2><?php echo $intro["h2"]; ?></h2>
			</header>

			<div class="summary" id="zen-summary" role="article">
				<p><?php echo $intro["summary-p1"]; ?></p>
				<p><?php echo $intro["summary-p2"]; ?></p>
			</div>

			<div class="preamble" id="zen-preamble" role="article">
				<h3>En image</h3>
				<p>
				<figure>
					<img src='/avant-apres-css.jpg' style='width:100%;' alt="Capture d'écran du site hitek.fr montrant l'évolution visuelle du site amazon en 25 ans." />
					<figcaption>En images, amazon 25 avant. hitek.fr, dossier spécial 25 ans.</figcaption>
				</figure>
				</p>
			</div>

			<div class="preamble" id="zen-preamble" role="article">
				<h3><?php echo $intro["preamble-h3"]; ?></h3>
				<p><?php echo $intro["preamble-p1"]; ?></p>
				<p><?php echo $intro["preamble-p2"]; ?></p>
				<p><?php echo $intro["preamble-p3"]; ?></p>
			</div>
		</section>

		<div class="main supporting" id="zen-supporting" role="main">
			<div class="explanation" id="zen-explanation" role="article">
				<h3><?php echo $main["explanation-h3"]; ?></h3>
				<p><?php echo $main["explanation-p1"]; ?></p>
				<p><?php echo $main["explanation-p2"]; ?></p>
			</div>

			<div role="article" class="explanation" role="article">
				<h3>En vidéo</h3>
				<figure>
					<video controls style='width:100%'>
						<source src='/video.mp4' alt='Présentation de csszengarden par la Khan Academy, par Pamela Fox. Source : youtube.' type='video/mp4' />
					</video>
					<figcaption>Présentation de csszengarden par la Khan Academy, par Pamela Fox. Source : youtube.</figcaption>
				</figure>
			</div>

			<div class="participation" id="zen-participation" role="article">
				<h3><?php echo $main["participation-h3"]; ?></h3>
				<p><?php echo $main["participation-p1"]; ?></p>
				<p><?php echo $main["participation-p2"]; ?></p>
				<p><?php echo $main["participation-p3"]; ?></p>
			</div>

			<div class="benefits" id="zen-benefits" role="article">
				<h3><?php echo $main["benefits-h3"]; ?></h3>
				<p><?php echo $main["benefits-p1"]; ?></p>
			</div>

			<div class="requirements" id="zen-requirements" role="article">
				<h3><?php echo $main["requirements-h3"]; ?></h3>
				<p><?php echo $main["requirements-p1"]; ?></p>
				<p><?php echo $main["requirements-p2"]; ?></p>
				<p><?php echo $main["requirements-p3"]; ?></p>
				<p><?php echo $main["requirements-p4"]; ?></p>
				<p role="contentinfo"><?php echo $main["requirements-p5"]; ?></p>
			</div>

			<footer id="footer">
				<a href="<?php echo $zenUrls["zen-validate-html"]; ?>" title="<?php echo $footer["zen-validate-html-title"]; ?>" class="zen-validate-html"><?php echo $footer["zen-validate-html-text"]; ?></a>
				<a href="<?php echo $zenUrls["zen-validate-css"]; ?>" title="<?php echo $footer["zen-validate-css-title"]; ?>" class="zen-validate-css"><?php echo $footer["zen-validate-css-text"]; ?></a>
				<a href="<?php echo $zenUrls["zen-license"]; ?>" title="<?php echo $footer["zen-license-title"]; ?>" class="zen-license"><?php echo $footer["zen-license-text"]; ?></a>
				<a href="<?php echo $zenUrls["zen-accessibility"]; ?>" title="<?php echo $footer["zen-accessibility-title"]; ?>" class="zen-accessibility"><?php echo $footer["zen-accessibility-text"]; ?></a>
				<a href="<?php echo $zenUrls["zen-github"]; ?>" title="<?php echo $footer["zen-github-title"]; ?>" class="zen-github"><?php echo $footer["zen-github-text"]; ?></a>
			</footer>

		</div>


		<aside class="sidebar" role="complementary">
			<div class="wrapper">

				<div class="design-selection" id="design-selection">
					<h3 class="select"><?php echo $sidebar["design-selection-h3"]; ?></h3>
					<nav role="navigation">
						<ul>
							<?php
							echo getDesignList($listStart, $numDesigns, $designList, $sidebar["design-selection-by"]);
							?>
						</ul>
					</nav>
				</div>

				<div class="design-archives" id="design-archives">
					<h3 class="archives"><?php echo $sidebar["design-archives-h3"]; ?></h3>
					<nav role="navigation">
						<ul>
							<?php
							if ($listStart > $numDesigns) {
								$nextPage = $thisPage + 1;
							?>
								<li class="next">
									<a href="<?php echo "$langURL/$currentDesign/page$nextPage"; ?>">
										<?php echo $sidebar["design-archives-next"]; ?> <span class="indicator">&rsaquo;</span>
									</a>
								</li>
							<?php
							}

							if ($thisPage > 0) {
								if ($thisPage > 1) {
									$prev = $thisPage - 1;
									$prevPage = "page$prev/";
								} else {
									$prevPage = ''; // don't create '/page0/' urls
								}
							?>
								<li class="previous">
									<a href="<?php echo "$langURL/$currentDesign/$prevPage"; ?>">
										<span class="indicator">&lsaquo;</span> <?php echo $sidebar["design-archives-previous"]; ?>
									</a>
								</li>
							<?php
							}
							?>
							<li class="viewall">
								<a href="<?php echo $zenUrls["zen-view-all"]; ?>" title="<?php echo $sidebar["design-archives-viewall-title"]; ?>">
									<?php echo $sidebar["design-archives-viewall-text"]; ?>
								</a>
							</li>
						</ul>
					</nav>
				</div>

				<div class="zen-resources" id="zen-resources">
					<h3 class="resources"><?php echo $sidebar["design-resources-h3"]; ?></h3>
					<ul>
						<li class="view-css">
							<a href="<?php echo "$currentStyleSheet" ?>" title="<?php echo $sidebar["view-css-title"]; ?>">
								<?php echo $sidebar["view-css-text"]; ?>
							</a>
						</li>
						<li class="css-resources">
							<a href="<?php echo $zenUrls["zen-resources"]; ?>" title="<?php echo $sidebar["css-resources-title"]; ?>">
								<?php echo $sidebar["css-resources-text"]; ?>
							</a>
						</li>
						<li class="zen-faq">
							<a href="<?php echo $zenUrls["zen-faq"]; ?>" title="<?php echo $sidebar["zen-faq-title"]; ?>">
								<?php echo $sidebar["zen-faq-text"]; ?>
							</a>
						</li>
						<li class="zen-submit">
							<a href="<?php echo $zenUrls["zen-submit"]; ?>" title="<?php echo $sidebar["zen-submit-title"]; ?>">
								<?php echo $sidebar["zen-submit-text"]; ?>
							</a>
						</li>
						<li class="zen-translations">
							<a href="<?php echo $zenUrls["zen-translations"]; ?>" title="<?php echo $sidebar["zen-translations-title"]; ?>">
								<?php echo $sidebar["zen-translations-text"]; ?>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</aside>


	</div>

	<!--
<?php echo $foot["comment"]; ?>

-->
	<div class="extra1" role="presentation"></div>
	<div class="extra2" role="presentation"></div>
	<div class="extra3" role="presentation"></div>
	<div class="extra4" role="presentation"></div>
	<div class="extra5" role="presentation"></div>
	<div class="extra6" role="presentation"></div>

	<style>
		body {
			padding-top: 50px;
		}

		nav.top-menu {
			position: fixed;
			top: 0;
			left: 0;
			width: 100%;
			height: 50px;
			background: #fff;
			border-bottom: 1px solid #ccc;
			z-index: 100;
		}

		nav.top-menu ul {
			list-style: none;
		}

		nav.top-menu ul li {
			float: left;
			margin: 0 10px;
		}
	</style>
	<style>
	</style>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="https://cdn.jsdelivr.net/npm/js-cookie@3.0.5/dist/js.cookie.min.js"></script>
	<script src="/accessibility-menu.js"></script>
</body>

</html>