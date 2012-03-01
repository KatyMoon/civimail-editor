<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" debug="true">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>CiviMail demo</title>
	<link href="editor.css" rel="stylesheet" type="text/css" />
	<link href="newsletter.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js"></script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.5/jquery-ui.min.js"></script>
	<script type="text/javascript" src="jquery.jeditable.mini.js.rb" charset="utf-8"></script>
	<script type="text/javascript" src="civimail-in-place-edit.js" charset="utf-8"></script>
</head>

<body leftmargin="0" marginwidth="0" topmargin="0" marginheight="0" offset="0">
	<center>
    	<table id="bgTable" border="0" cellpadding="0" cellspacing="0" height="100%" width="100%">
        	<tr>
            	<td align="center" valign="top" style="border: 0 none;">
					<table id="wrapper" border="0" cellpadding="0" cellspacing="0"  width="600">
						<tr>
							<td>
								<table id="header" border="0" cellpadding="10" cellspacing="0"  width="600">
									<tr><td>
										<div style="width: 560px;">
											<h1 class="editable">Newsletter title</h1>
										</div>
									</td></tr>
								</table>
							</td>
						</tr>
			
						<tr>
							<td align="center" valign="top" style="border: 0 none;">
								<table id="main" border="0" cellpadding="0" cellspacing="0"  width="600">
									<tr>
										<td align="center" valign="top" style="border: 0 none;">
											<table id="left" border="0" cellpadding="10" cellspacing="0"  width="170">
												<tbody class="items">
													<tr>
														<td class="item">
															<!--it would be cool to make this a contents for the email-->
															<ul style="width: 150px;">
																<li class="editable"><a href="#">List item</a></li>
																<li class="editable"><a href="#">List item</a></li>
																<li class="editable"><a href="#">List item</a></li>
																<li class="editable"><a href="#">List item</a></li>
															</ul>
														</td>
													</tr>
													<tr>
														<td class="item">
															<div style="width: 150px;">
																<h3 class="editable">Block header</h3>
																<p class="editable">Some content here</p>
															</div>
														</td>
													</tr>
												</tbody>
											</table>
										</td>

										<td align="center" valign="top" style="border: 0 none;">
											<table id="right" border="0" cellpadding="10" cellspacing="0"  width="430">
												<tbody class="items">
													<tr><td class="item">
														<div style="width: 410px;">
															<h2 class="editable">Item 1</h1>
															<p class="editable">An item in the newsletter</p>
														</div>
													</td></tr>
													<tr><td class="item">
														<div style="width: 410px;">
															<h2 class="editable">Item 2</h1>
															<p class="editable">Another item in the newsletter</p>
														</div>
													</td></tr>
													<tr><td class="item">
														<div style="width: 410px;">
															<h2 class="editable">Item 3</h1>
															<p class="editable">The last item in the newsletter</p>
														</div>
													</td></tr>
												</tbody>
											</table>
										</td>
									</tr>
								</table>
							</td>
						</tr>
			
						<tr>
							<td align="center" valign="top" style="border: 0 none;">
								<table border="0" cellpadding="10" cellspacing="0"  width="600" id="footer">
									<tr><td>
										<div style="width: 560px;">
											<p class="editable">Footer</p>
										</div>
									</td></tr>
								</table>
							</td>
						</tr>
        			</table>
				</td>
			</tr>
		</table>
    </center>
</body>

</html>
