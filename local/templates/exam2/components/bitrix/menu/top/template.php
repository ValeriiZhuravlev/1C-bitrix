<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();


$this->setFrameMode(true);

if (empty($arResult["ALL_ITEMS"]))
	return;
?>
		<div class="menu popup-block">
		<ul>
		<li class="main-page"><a href="/"><?=GetMessage('MAIN_PAGE');?></a></li>
		<?foreach($arResult["MENU_STRUCTURE"] as $itemID => $arColumns):
			if($arResult["ALL_ITEMS"][$itemID]["PERMISSION"] == 'D') continue;
			?>     <!-- first level-->
			
			<li>
				<a href="<?=$arResult["ALL_ITEMS"][$itemID]["LINK"]?>">
					<?=$arResult["ALL_ITEMS"][$itemID]["TEXT"]?>
				</a>
			<?if (is_array($arColumns) && !empty($arColumns)):?>
					<?foreach($arColumns as $key=>$arRow):?>
						<ul>
							<?
							$menu_top_text = trim($APPLICATION->GetDirProperty('menu_top_text', $arResult["ALL_ITEMS"][$itemID]["LINK"]));
							if($menu_top_text) echo '<div class="menu-text">'.$menu_top_text.'</div>';
							?>
						<?foreach($arRow as $itemIdLevel_2=>$arLevel_3):?>  <!-- second level-->
							<?if($arResult["ALL_ITEMS"][$itemIdLevel_2]["PERMISSION"] == 'D') continue;?>
							<li>
								<a href="<?=$arResult["ALL_ITEMS"][$itemIdLevel_2]["LINK"]?>">
									<?=$arResult["ALL_ITEMS"][$itemIdLevel_2]["TEXT"]?>
								</a>
							<?if (is_array($arLevel_3) && !empty($arLevel_3)):?>
								<ul>
								<?
									$menu_top_text = trim($APPLICATION->GetDirProperty('menu_top_text', $arResult["ALL_ITEMS"][$itemIdLevel_2]["LINK"]));
									if($menu_top_text) echo '<div class="menu-text">'.$menu_top_text.'</div>';
								?>
								<?foreach($arLevel_3 as $itemIdLevel_3):?>	<!-- third level-->
									<li>
										<a href="<?=$arResult["ALL_ITEMS"][$itemIdLevel_3]["LINK"]?>">
											<?=$arResult["ALL_ITEMS"][$itemIdLevel_3]["TEXT"]?>
										</a>
									</li>
								<?endforeach;?>
								</ul>
							<?endif?>
							</li>
						<?endforeach;?>
						</ul>
					<?endforeach;?>
			<?endif?>
			</li>
		<?endforeach;?>
		</ul>
		<div style="clear: both;"></div>
		</div>



