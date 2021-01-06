<nav id="sidebar">
	<div class="text-center my-3">
		<a class="d-block" id="sidebar-logo" href="/"><img alt="MDC Panel"/></a>
	</div>
	<?php
		if (!$g->findCookie('toggleClock')) {
			require_once('templates/content-clock.php');
		}
		if (!$g->findCookie('toggleLiveVisitorCounter')) {
			require_once('templates/content-visitors.php');
		}
	?>
	<ul class="list-unstyled components px-3">
		<li class="nav-item">
			<a class="nav-link" href="/">
				<i class="fas fa-fw fa-th-large mr-2"></i><span class="icon-text">Dashboard</span>
			</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" target="_blank" rel="noopener noreferrer" href="<?= $g->getSettings('url-mdc') ?>">
				<i class="fas fa-fw fa-desktop mr-2"></i><span class="icon-text">Mobile Data Computer<i class="fas fa-fw fa-xs fa-ss fa-external-link-alt ml-2"></i></span>
			</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" target="_blank" rel="noopener noreferrer" href="<?= $g->getSettings('url-cad') ?>">
				<i class="fas fa-fw fa-headset mr-2"></i><span class="icon-text">Computer Aided Dispatch<i class="fas fa-fw fa-xs fa-ss fa-external-link-alt ml-2"></i></span>
			</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="/street-guide">
				<i class="fas fa-fw fa-map-marker-alt mr-2"></i><span class="icon-text">Street Guide</span>
			</a>
		</li>
		<li class="nav-item">
			<a class="nav-link dropdown-toggle" href="#generatorSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
				<i class="fas fa-fw fa-archive mr-2"></i><span class="icon-text">Paperwork Generators</span>
			</a>
			<ul class="collapse list-unstyled" id="generatorSubmenu">
				<li>
					<a class="nav-link" href="/paperwork-generators/arrest-charges">
						<i class="fas fa-fw fa-gavel mr-2"></i><span class="icon-text">Arrest Charges Calculator</span>
					</a>
				</li>
				<li>
					<a class="nav-link" href="/paperwork-generators/arrest-report">
						<i class="fas fa-fw fa-landmark mr-2"></i><span class="icon-text">Arrest Report</span>
					</a>
				</li>
				<li>
					<a class="nav-link" href="/paperwork-generators/traffic-report">
						<i class="fas fa-fw fa-car mr-2"></i><span class="icon-text">Traffic Report</span>
					</a>
				</li>
				<li>
					<a class="nav-link" href="/paperwork-generators/impound-report">
						<i class="fas fa-fw fa-truck-pickup mr-2"></i><span class="icon-text">Impound Report</span>
					</a>
				</li>
				<li>
					<a class="nav-link" href="/paperwork-generators/parking-ticket">
						<i class="fas fa-fw fa-parking mr-2"></i><span class="icon-text">Parking Ticket</span>
					</a>
				</li>
				<li>
					<a class="nav-link" href="/paperwork-generators/death-report">
						<i class="fas fa-fw fa-skull mr-2"></i><span class="icon-text">Death Report</span>
					</a>
				</li>
				<li>
					<a class="nav-link" href="/paperwork-generators/traffic-division-patrol-report">
						<img class="mr-2" src="/images/divisions/traffic.png" alt="TD Logo" width="16px" style="margin-top: -4px" /><span class="icon-text">TD: Patrol Report</span>
					</a>
				</li>
			</ul>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="/useful-resources">
				<i class="fas fa-fw fa-book mr-2"></i><span class="icon-text">Useful Resources</span>
			</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" target="_blank" rel="noopener noreferrer" href="<?= $g->getSettings('url-bbcoderip') ?>">
				<i class="fas fa-fw fa-hand-middle-finger mr-2"></i><span class="icon-text">BBCode.RIP<i class="fas fa-fw fa-xs fa-ss fa-external-link-alt ml-2"></i></span>
			</a>
		</li>
		<hr class="my-3">
		<li class="nav-item">
			<a class="nav-link" target="_blank" rel="noopener noreferrer" href="<?= $g->getSettings('url-lspd') ?>">
				<img class="mr-2" src="/images/Logo-LSPD.png" alt="LSPD Logo" width="16px" style="margin-top: -4px" /><span class="icon-text">LSPD<i class="fas fa-fw fa-xs fa-ss fa-external-link-alt ml-2"></i></span>
			</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" target="_blank" rel="noopener noreferrer" href="<?= $g->getSettings('url-lssd') ?>">
				<img class="mr-2" src="/images/Logo-LSSD.png" alt="LSSD Logo" width="16px" style="margin-top: -4px" /><span class="icon-text">LSSD<i class="fas fa-fw fa-xs fa-ss fa-external-link-alt ml-2"></i></span>
			</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" target="_blank" rel="noopener noreferrer" href="<?= $g->getSettings('url-lsfd') ?>">
				<img class="mr-2" src="/images/Logo-LSFD.png" alt="LSFD Logo" width="16px" style="margin-top: -4px" /><span class="icon-text">LSFD<i class="fas fa-fw fa-xs fa-ss fa-external-link-alt ml-2"></i></span>
			</a>
		</li>
		<hr class="my-3">
		<li class="nav-item">
			<a class="nav-link" href="/settings">
				<i class="fas fa-fw fa-cog mr-2"></i><span class="icon-text">Settings</span>
			</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="/changelogs#<?= $g->getSettings('site-version') ?>">
				<i class="fas fa-fw fa-plug mr-2"></i><span class="icon-text">Changelogs<span class="badge badge-danger ml-3"><?= $g->getSettings('site-version') ?></span></span>
			</a>
		</li>
	</ul>
</nav>