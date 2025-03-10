<?php
/**
 * Copyright (C) 2014-2018 ServMask Inc.
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * ███████╗███████╗██████╗ ██╗   ██╗███╗   ███╗ █████╗ ███████╗██╗  ██╗
 * ██╔════╝██╔════╝██╔══██╗██║   ██║████╗ ████║██╔══██╗██╔════╝██║ ██╔╝
 * ███████╗█████╗  ██████╔╝██║   ██║██╔████╔██║███████║███████╗█████╔╝
 * ╚════██║██╔══╝  ██╔══██╗╚██╗ ██╔╝██║╚██╔╝██║██╔══██║╚════██║██╔═██╗
 * ███████║███████╗██║  ██║ ╚████╔╝ ██║ ╚═╝ ██║██║  ██║███████║██║  ██╗
 * ╚══════╝╚══════╝╚═╝  ╚═╝  ╚═══╝  ╚═╝     ╚═╝╚═╝  ╚═╝╚══════╝╚═╝  ╚═╝
 */
?>

<div class="ai1m-field-set">
	<div class="ai1m-accordion ai1m-expandable">
		<h4>
			<i class="ai1m-icon-arrow-right"></i>
			<?php _e( 'Advanced options', AI1M_PLUGIN_NAME ); ?>
			<small><?php _e( '(click to expand)', AI1M_PLUGIN_NAME ); ?></small>
		</h4>
		<ul>
			<li>
				<label for="ai1m-no-spam-comments">
					<input type="checkbox" id="ai1m-no-spam-comments" name="options[no_spam_comments]" />
					<?php _e( 'Do <strong>not</strong> export spam comments', AI1M_PLUGIN_NAME ); ?>
				</label>
			</li>
			<li>
				<label for="ai1m-no-post-revisions">
					<input type="checkbox" id="ai1m-no-post-revisions" name="options[no_post_revisions]" />
					<?php _e( 'Do <strong>not</strong> export post revisions', AI1M_PLUGIN_NAME ); ?>
				</label>
			</li>
			<li>
				<label for="ai1m-no-media">
					<input type="checkbox" id="ai1m-no-media" name="options[no_media]" />
					<?php _e( 'Do <strong>not</strong> export media library (files)', AI1M_PLUGIN_NAME ); ?>
				</label>
			</li>
			<li>
				<label for="ai1m-no-themes">
					<input type="checkbox" id="ai1m-no-themes" name="options[no_themes]" />
					<?php _e( 'Do <strong>not</strong> export themes (files)', AI1M_PLUGIN_NAME ); ?>
				</label>
			</li>

			<?php if ( apply_filters( 'ai1m_max_file_size', AI1WM_MAX_FILE_SIZE ) === 0 ) : ?>
				<li>
					<label for="ai1m-no-inactive-themes">
						<input type="checkbox" id="ai1m-no-inactive-themes" name="options[no_inactive_themes]" />
						<?php _e( 'Do <strong>not</strong> export inactive themes (files)', AI1M_PLUGIN_NAME ); ?>
						<small style="color: red;"><?php _e( 'new', AI1M_PLUGIN_NAME ); ?></small>
					</label>
				</li>
			<?php endif; ?>

			<li>
				<label for="ai1m-no-muplugins">
					<input type="checkbox" id="ai1m-no-muplugins" name="options[no_muplugins]" />
					<?php _e( 'Do <strong>not</strong> export must-use plugins (files)', AI1M_PLUGIN_NAME ); ?>
				</label>
			</li>

			<li>
				<label for="ai1m-no-plugins">
					<input type="checkbox" id="ai1m-no-plugins" name="options[no_plugins]" />
					<?php _e( 'Do <strong>not</strong> export plugins (files)', AI1M_PLUGIN_NAME ); ?>
				</label>
			</li>

			<?php if ( apply_filters( 'ai1m_max_file_size', AI1WM_MAX_FILE_SIZE ) === 0 ) : ?>
				<li>
					<label for="ai1m-no-inactive-plugins">
						<input type="checkbox" id="ai1m-no-inactive-plugins" name="options[no_inactive_plugins]" />
						<?php _e( 'Do <strong>not</strong> export inactive plugins (files)', AI1M_PLUGIN_NAME ); ?>
						<small style="color: red;"><?php _e( 'new', AI1M_PLUGIN_NAME ); ?></small>
					</label>
				</li>
				<li>
					<label for="ai1m-no-cache">
						<input type="checkbox" id="ai1m-no-cache" name="options[no_cache]" />
						<?php _e( 'Do <strong>not</strong> export cache (files)', AI1M_PLUGIN_NAME ); ?>
						<small style="color: red;"><?php _e( 'new', AI1M_PLUGIN_NAME ); ?></small>
					</label>
				</li>
			<?php endif; ?>

			<li>
				<label for="ai1m-no-database">
					<input type="checkbox" id="ai1m-no-database" name="options[no_database]" />
					<?php _e( 'Do <strong>not</strong> export database (sql)', AI1M_PLUGIN_NAME ); ?>
				</label>
			</li>
			<li>
				<label for="ai1m-no-email-replace">
					<input type="checkbox" id="ai1m-no-email-replace" name="options[no_email_replace]" />
					<?php _e( 'Do <strong>not</strong> replace email domain (sql)', AI1M_PLUGIN_NAME ); ?>
				</label>
			</li>

			<?php do_action( 'ai1m_export_advanced_settings' ); ?>
		</ul>
	</div>
</div>
