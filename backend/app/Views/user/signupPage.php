<?= $this->include('user/fragments/header') ?>

<div style="min-height: 80vh; display: flex; align-items: center; justify-content: center; padding: 20px;">
	<div style="background: #222a31; border: 1px solid #36414c; border-radius: 8px; padding: 40px; width: 100%; max-width: 400px;">
		<h1 style="text-align: center; margin: 0 0 30px 0; color: #e9edf1; font-family: Georgia, 'Times New Roman', serif;">Sign Up</h1>
		
		<form method="POST" action="/signup">
			<div style="margin-bottom: 20px;">
				<label style="display: block; margin-bottom: 8px; color: #e9edf1; font-weight: bold;">Full Name</label>
				<input type="text" name="full_name" required style="width: 100%; padding: 12px; border: 1px solid #36414c; border-radius: 6px; background: #1a2026; color: #e9edf1; font-size: 14px; box-sizing: border-box;">
			</div>
			
			<div style="margin-bottom: 20px;">
				<label style="display: block; margin-bottom: 8px; color: #e9edf1; font-weight: bold;">Email</label>
				<input type="email" name="email" required style="width: 100%; padding: 12px; border: 1px solid #36414c; border-radius: 6px; background: #1a2026; color: #e9edf1; font-size: 14px; box-sizing: border-box;">
			</div>
			
			<div style="margin-bottom: 20px;">
				<label style="display: block; margin-bottom: 8px; color: #e9edf1; font-weight: bold;">Password</label>
				<input type="password" name="password" required style="width: 100%; padding: 12px; border: 1px solid #36414c; border-radius: 6px; background: #1a2026; color: #e9edf1; font-size: 14px; box-sizing: border-box;">
			</div>
			
			<div style="margin-bottom: 20px;">
				<label style="display: block; margin-bottom: 8px; color: #e9edf1; font-weight: bold;">Club Name</label>
				<input type="text" name="club_name" style="width: 100%; padding: 12px; border: 1px solid #36414c; border-radius: 6px; background: #1a2026; color: #e9edf1; font-size: 14px; box-sizing: border-box;">
			</div>
			
			<button type="submit" style="width: 100%; background: #2d7d5b; color: #fff; padding: 12px; border: none; border-radius: 6px; font-size: 16px; font-weight: bold; cursor: pointer; margin-bottom: 20px;">Sign Up</button>
		</form>
		
		<div style="text-align: center;">
			<p style="color: #c6cdd5; margin: 0;">Already have an account? <a href="/login" style="color: #3f7aa0; text-decoration: none; font-weight: bold;">Login</a></p>
		</div>
	</div>
</div>

<?= $this->include('user/fragments/footer') ?>
