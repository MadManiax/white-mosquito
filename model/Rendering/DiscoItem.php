<div class="discoItem">
    
        <div class="left">
            <ul class="gallery clearfix">
            <li style="display: inline;">
                <a href="<?php echo $discoImgSrc; ?>" rel="prettyPhoto[gallery1]" title="<?php echo $discoTitle; ?>" alt="<?php echo $discoTitle; ?>">
                    <img src="<?php echo $discoImgSrc; ?>" alt="<?php echo $discoTitle; ?>" title="<?php echo $discoTitle; ?>" />
                </a>
            </li>
        </ul>
        </div>
        <div class="right">
			<div class="info">
				<h3><?php echo $discoTitle; ?></h3>
				<ul>
					<li><span>Anno: </span><p class"right"><?php echo $discoYear; ?></p></li>
					<li><span>Durata:</span><p class"right"><?php echo $discoDurata; ?></p></li>
				
					<li>
						<span>Track list:</span><br/>
						<div class="titletrack">
							<ul>
								<?php
									foreach($tracks as $track)
									{
								?>
								<li><?php echo $track[0]; ?><div class="timing">(<?php echo $track[1]; ?>)</div></li>
					
								<?php
									}
								?>
							</ul>
						</div>
					</li>
				</ul>
			</div>
        </div>    
</div>
