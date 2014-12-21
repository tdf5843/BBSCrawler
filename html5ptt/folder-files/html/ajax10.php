	<?php 
						require_once('simple_html_dom.php');
						$arr = array('a href="' => 'a href="https://www.ptt.cc');
						$arr1 = array('<img' => '<img width="80px" height="75px"');
						//$fp = fopen('ptt.txt', 'w');
						$html = file_get_html('https://www.ptt.cc/bbs/Beauty/index.html');
						$result = $html->find('div.title');
						$arraycou = count($result);
						$aw = 0;
						$aw1 = 0;
						while($aw<$arraycou)
						{
							$v = $result[$aw];
							//preg_replace('/\s+/', '', $v);
							preg_match('/https.*html/', strtr($v,$arr) , $beautyr);
							if($beautyr)
							{
								$bu = file_get_html($beautyr[0]);
								if($bu)
								{
									$bu1 = $bu->find('img',0);
									if($bu1&&$aw1==0)
									{	
									echo '<div class="first column" style="width:50%; float: left;">';
									echo "<br>",strtr($v,$arr),strtr($bu1,$arr1);
									echo '</div>';
									$aw1 +=1;
									}
									else if($bu1&&$aw1==1)
									{
									echo '<div class="last column" style="width:50%; float: left;">';
									echo "<br>",strtr($v,$arr),strtr($bu1,$arr1);
									echo '</div>';
									$aw1 -=1;
									}
								}
							}
							$aw += 1;
						}
						echo '<br style="clear:both;">';
						?>