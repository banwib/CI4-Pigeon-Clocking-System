<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= $title ?? 'Pigeon Clocking System' ?></title>
	<style>
		body { margin: 0; padding: 0; background: #1a2026; color: #e9edf1; font-family: Arial, Helvetica, sans-serif; }
		.header { background: #222a31; border-bottom: 1px solid #36414c; padding: 12px 0; }
		.container { max-width: 980px; margin: 0 auto; padding: 0 20px; }
		.nav { display: flex; justify-content: space-between; align-items: center; }
		.logo { font-family: Georgia, "Times New Roman", serif; font-size: 20px; color: #3f7aa0; text-decoration: none; font-weight: bold; }
		.nav-links { display: flex; gap: 20px; align-items: center; }
		.nav-links a { color: #e9edf1; text-decoration: none; padding: 8px 12px; border-radius: 4px; }
		.nav-links a:hover { background: #36414c; }
		.dropdown { position: relative; display: inline-block; }
		.dropdown-content { display: none; position: absolute; background: #222a31; border: 1px solid #36414c; border-radius: 6px; min-width: 160px; box-shadow: 0 4px 8px rgba(0,0,0,0.3); z-index: 1000; top: 100%; left: 0; }
		.dropdown-content a { color: #e9edf1; padding: 12px 16px; text-decoration: none; display: block; }
		.dropdown-content a:hover { background: #36414c; }
		.dropdown:hover .dropdown-content { display: block; }
		.dropdown-btn { background: #6a3c50; color: #fff; border: none; padding: 8px 14px; border-radius: 6px; cursor: pointer; font-size: 14px; font-weight: bold; }
		.dropdown-btn:hover { background: #5b3345; }
		.btn { display: inline-block; padding: 8px 14px; border-radius: 6px; text-decoration: none; font-weight: bold; margin: 6px 6px 0 0; border: 1px solid transparent; font-size: 14px; }
		.btn-primary { background: #3f7aa0; color: #fff; border-color: #2b6486; }
		.btn-secondary { background: #6a3c50; color: #fff; border-color: #5b3345; }
	</style>
</head>
<body>
	<header class="header">
		<div class="container">
			<nav class="nav">
				<a href="/" class="logo">Pigeon Clocking System</a>
				<div class="nav-links">
					<a href="/">Home</a>
					<a href="/moodboardPage">Mood Board</a>
					<a href="/roadmapPage">Roadmap</a>
					<div class="dropdown">
						<?= $this->include('user/fragments/button_manage') ?>
						<div class="dropdown-content">
							<a href="/manageclubPage">Manage Club</a>
							<a href="/racesPage">Races</a>
							<a href="/racepointsPage">Race Points</a>
							<a href="/logsPage">Logs</a>
						</div>
					</div>
					<?= $this->include('user/fragments/button_login') ?>
					<?= $this->include('user/fragments/button_signup') ?>
				</div>
			</nav>
		</div>
	</header>
