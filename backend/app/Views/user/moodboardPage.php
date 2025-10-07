<?= $this->include('user/fragments/header') ?>
	<style>
		/* Basic, simple styles */
		body { margin: 0; padding: 20px; background: #1a2026; color: #e9edf1; font-family: Arial, Helvetica, sans-serif; }
		.container { max-width: 980px; margin: 0 auto; }
		h1, h2 { font-family: Georgia, "Times New Roman", serif; margin: 0 0 10px 0; }
		h1 { font-size: 26px; }
		h2 { font-size: 18px; color: #d6dbe0; margin-top: 24px; }
		.box { background: #222a31; border: 1px solid #36414c; border-radius: 8px; padding: 12px; margin-bottom: 12px; }
		.small { font-size: 12px; color: #c4ccd4; }

		/* Palette */
		.row { margin: 8px 0; }
		.swatch { display: inline-block; width: 90px; height: 36px; border-radius: 6px; margin-right: 8px; border: 1px solid #0e1318; }

		/* Typography */
		.sample-head { font-family: Georgia, "Times New Roman", serif; font-size: 24px; }
		.sample-body { font-family: Arial, Helvetica, sans-serif; line-height: 1.6; color: #cfd6dd; }

		/* Buttons */
		.btn { display: inline-block; padding: 8px 14px; border-radius: 6px; text-decoration: none; font-weight: bold; margin: 6px 6px 0 0; border: 1px solid transparent; font-size: 14px; }
		.btn-primary { background: #3f7aa0; color: #fff; border-color: #2b6486; }
		.btn-secondary { background: #6a3c50; color: #fff; border-color: #5b3345; }
		.btn-border { background: transparent; color: #e9edf1; border-color: #a7b0ba; }
		.btn-disabled { background: #303842; color: #8d97a2; border-color: #3b4450; cursor: not-allowed; }

		/* Cards */
		.card { display: inline-block; width: 30%; min-width: 220px; vertical-align: top; margin-right: 10px; margin-top: 10px; background: #222a31; border: 1px solid #36414c; border-radius: 8px; padding: 12px; }
		.card h3 { margin: 0 0 6px 0; font-size: 16px; }
		.card p { margin: 0; font-size: 14px; color: #c6cdd5; }
		.card a { color: #3f7aa0; text-decoration: none; font-weight: bold; }

		/* Logos (very simple) */
		.logo-box { display: inline-block; width: 45%; min-width: 220px; text-align: center; margin-right: 10px; margin-top: 10px; }
		.circle { width: 120px; height: 120px; background: #2b323a; border-radius: 60px; margin: 0 auto 8px; border: 2px solid #0a0e12; }
		.square { width: 120px; height: 120px; background: #2b323a; border-radius: 14px; margin: 0 auto 8px; border: 2px solid #0a0e12; }
	</style>
</head>
<body>
	<div class="container">
		<br><h1>Mood board</h1>

		<h2>Color palette</h2>
		<div class="box">
			<div class="row">
				<div class="swatch" style="background:#1f3b4d"></div>
				<div class="swatch" style="background:#2e5872"></div>
				<div class="swatch" style="background:#3f7aa0"></div>
				<span class="small">Sky Blues (branding)</span>
			</div>
			<div class="row">
				<div class="swatch" style="background:#2d7d5b"></div>
				<div class="swatch" style="background:#3e916c"></div>
				<div class="swatch" style="background:#54a981"></div>
				<span class="small">Loft Greens (support)</span>
			</div>
			<div class="row">
				<div class="swatch" style="background:#1e2329"></div>
				<div class="swatch" style="background:#2b323a"></div>
				<div class="swatch" style="background:#a7b0ba"></div>
				<span class="small">Track Slate (background)</span>
			</div>
		</div>

		<h2>Typography</h2>
		<div class="box">
			<div class="small">Heading font</div>
			<div class="sample-head">Georgia — Heading example</div>
			<div class="small" style="margin-top:10px;">Body font</div>
			<p class="sample-body">Arial — Body text example that is easy to read on a semi-dark background. Keep paragraphs short and clear for good legibility.</p>
		</div>

		<h2>Buttons</h2>
		<div class="box">
			<div class="dropdown" style="display: inline-block; margin-right: 10px;">
				<?= $this->include('user/fragments/button_manage') ?>
			</div>
			<?= $this->include('user/fragments/button_login', ['href' => '#']) ?>
			<?= $this->include('user/fragments/button_signup', ['href' => '#']) ?>
			<?= $this->include('user/fragments/button_disabled') ?>
		</div>

		<h2>Card sample</h2>
		<?= $this->include('user/fragments/cards') ?>

		<h2>Logos</h2>
		<div class="box">
			<div class="logo-box">
				<img src="Images/PPCP_Logo.png" alt="PPCP Logo" style="width: 120px; height: 120px; object-fit: contain; border-radius: 8px; background: #2b323a; padding: 10px; border: 2px solid #0a0e12;">
				<div class="small">PPCP Logo</div>
			</div>
		</div>
	</div>

<?= $this->include('user/fragments/cta') ?>

<?= $this->include('user/fragments/footer') ?>


