<?= $this->include('user/fragments/header') ?>

<div style="max-width: 980px; margin: 0 auto; padding: 20px;">
	<h1 style="color: #e9edf1; font-family: Georgia, 'Times New Roman', serif; margin-bottom: 30px;">Development Roadmap</h1>
	
	<div style="background: #222a31; border: 1px solid #36414c; border-radius: 8px; padding: 30px; margin-bottom: 20px;">
		<h2 style="color: #3f7aa0; font-family: Georgia, 'Times New Roman', serif; margin: 0 0 20px 0;">Core Features</h2>
		
		<div style="margin-bottom: 25px;">
			<h3 style="color: #2d7d5b; margin: 0 0 10px 0;">✅ Available</h3>
			<ul style="color: #c6cdd5; margin: 0; padding-left: 20px;">			
				<li>Mood Board</li>
				<li>Roadmap Page</li>
			</ul>
		</div>
		
		<div style="margin-bottom: 25px;">
			<h3 style="color: #a8742a; margin: 0 0 10px 0;">🔄 In Progress</h3>
			<ul style="color: #c6cdd5; margin: 0; padding-left: 20px;">
				<li>User Authentication</li>
				<li>Session Management</li>
				<li>Login System</li>
				<li>Sign Up System</li>
			</ul>
		</div>
		
		<div style="margin-bottom: 25px;">
			<h3 style="color: #8b5770; margin: 0 0 10px 0;">📋 Not Started</h3>
			<ul style="color: #c6cdd5; margin: 0; padding-left: 20px;">
				<li>Manage Club</li>
				<li>Add/Edit Race Points</li>
				<li>Add/Edit Race</li>
				<li>Logs System</li>
			</ul>
		</div>
	</div>
	
	<div style="background: #222a31; border: 1px solid #36414c; border-radius: 8px; padding: 30px; margin-bottom: 20px;">
		<h2 style="color: #3f7aa0; font-family: Georgia, 'Times New Roman', serif; margin: 0 0 20px 0;">Proposed CRUD Features</h2>
		
		<div style="margin-bottom: 20px;">
			<h3 style="color: #2d7d5b; margin: 0 0 10px 0;">Pigeon Management</h3>
			<p style="color: #c6cdd5; margin: 0;">Create, read, update, and delete pigeon records with band numbers, breeding info, and performance history.</p>
		</div>
		
		<div style="margin-bottom: 20px;">
			<h3 style="color: #2d7d5b; margin: 0 0 10px 0;">Race Results</h3>
			<p style="color: #c6cdd5; margin: 0;">Manage race results, timing data, velocity calculations, and ranking systems.</p>
		</div>
		
		<div style="margin-bottom: 20px;">
			<h3 style="color: #2d7d5b; margin: 0 0 10px 0;">Club Members</h3>
			<p style="color: #c6cdd5; margin: 0;">Full member management with contact info, membership status, and racing statistics.</p>
		</div>
		
		<div style="margin-bottom: 20px;">
			<h3 style="color: #2d7d5b; margin: 0 0 10px 0;">User Authentication</h3>
			<p style="color: #c6cdd5; margin: 0;">Secure login and signup system with user registration, password management, and session handling.</p>
		</div>
	</div>
	
	<div style="background: #222a31; border: 1px solid #36414c; border-radius: 8px; padding: 30px;">
		<h2 style="color: #3f7aa0; font-family: Georgia, 'Times New Roman', serif; margin: 0 0 20px 0;">Timeline</h2>
		<div style="color: #c6cdd5;">
			<p><strong>Phase 1:</strong> Basic Pages (Current)</p>
			<p><strong>Phase 2:</strong> User Authentication</p>
			<p><strong>Phase 3:</strong> Club Management</p>
			<p><strong>Phase 4:</strong> Race Management and Race Points</p>
			<p><strong>Phase 5:</strong> Reporting</p>
		</div>
	</div>
</div>

<?= $this->include('user/fragments/cta') ?>

<?= $this->include('user/fragments/footer') ?>
