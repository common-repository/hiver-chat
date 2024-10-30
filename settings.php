<div class="wrap">
	<h2><?php echo esc_html($this->plugin->displayName); ?> Settings</h2>
	<?php
	if (isset($this->message)) {
	?>
		<div class="updated fade">
			<p><?php echo esc_html($this->message); ?></p>
		</div>
	<?php
	}
	if (isset($this->errorMessage)) {
	?>
		<div class="error fade">
			<p><?php echo esc_html($this->errorMessage); ?></p>
		</div>
	<?php
	}
	?>

	<div id="poststuff">
		<div id="post-body" class="metabox-holder columns-2">
			<!-- Content -->
			<div id="post-body-content">
				<div id="normal-sortables" class="meta-box-sortables ui-sortable">
					<div class="postbox">
						<h3>Settings</h3>
						<div class="inside">
							<form action="options-general.php?page=<?php echo esc_attr($this->plugin->name); ?>" method="post">
								<table class="form-table" role="presentation">
									<tbody>
										<tr>
											<th scope="row">
												<label for="hiver_api_key">API Key</label>
											</th>
											<td>
												<input id="hiver_api_key" class="regular-text" type="text" name="api_key" required="true" value="<?php echo esc_textarea($this->plugin->apiKey); ?>" />
											</td>
										</tr>
									</tbody>
								</table>
								<?php wp_nonce_field($this->plugin->name, $this->plugin->name . '_nonce'); ?>
								<p>
									<input name="submit" type="submit" name="Save" class="button button-primary" value="Save" />
								</p>
							</form>
						</div>
					</div>
				</div>
			</div>

			<div id="postbox-container-1" class="postbox-container">
				<div class="postbox">
					<h3 class="hndle">
						<span>How to get API key?</span>
					</h3>
					<div class="inside">
						<p>
							Please visit <a href="https://hiver.io" target="_blank">hiver.io</a> and log into your account.
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>