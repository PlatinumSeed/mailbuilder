@extends('email-templates.layouts.standard')

@section('content')
	<!-- Tables are the most common way to format your email consistently. Set your table widths inside cells and in most cases reset cellpadding, cellspacing, and border to zero. Use nested tables as a way to space effectively in your message. -->
	<table cellpadding="0" cellspacing="0" border="0" width="750" align="center">
		<tr>
			<td valign="top">
				<table cellpadding="0" cellspacing="0" border="0" align="center">
					<tr>
						<td height="50" colspan="3">
						</td>
					</tr>
					<tr>
						<td width="400" valign="top">
							<img class="image_fix" src="http://www.skinrenewal.co.za/uploads/newsletter_images/celebrate_mailer.jpg" alt="" title="" width="400" height="123">
						</td>
						<td width="80" valign="top">
							<img class="image_fix" src="http://www.skinrenewal.co.za/uploads/newsletter_images/spacer-two.png" alt="" title="" width="80" height="62">
						</td>
						<td width="236" valign="top">
							<table cellpadding="0" cellspacing="0" border="0" align="center">
								<tr>
									<td width="60" valign="top" style="text-align: right;">
									<img class="image_fix" src="http://www.skinrenewal.co.za/uploads/newsletter_images/spacer-twentyfour.gif" alt="" title="" width="60" height="10">
									*|FACEBOOK:LIKE|*
									</td>
									<td width="41" valign="top">
										<a href="https://www.facebook.com/SkinandBodyRenewal" target="_blank" title="" style="color: #7f8c76; text-decoration: none;">
										<img class="image_fix" src="http://www.skinrenewal.co.za/uploads/newsletter_images/icon-facebook.png" alt="" title="" width="41" height="61">
										</a>
									</td>
									<td width="48" valign="top">
										<a href="http://www.twitter.com/SkinBodyRenewal" target="_blank" title="" style="color: #7f8c76; text-decoration: none;">
										<img class="image_fix" src="http://www.skinrenewal.co.za/uploads/newsletter_images/icon-twitter.png" alt="" title="" width="48" height="61">
										</a>
									</td>
									<td width="45" valign="top">
										<a href="https://plus.google.com/109827155116496923546/posts" target="_blank" title="" style="color: #7f8c76; text-decoration: none;">
										<img class="image_fix" src="http://www.skinrenewal.co.za/uploads/newsletter_images/icon-googleplus.png" alt="" title="" width="45" height="61">
										</a>
									</td>
									<td width="42" valign="top">
										<a href="http://www.linkedin.com/company/582745?trk=tyah" target="_blank" title="" style="color: #7f8c76; text-decoration: none;">
										<img class="image_fix" src="http://www.skinrenewal.co.za/uploads/newsletter_images/icon-linkedin.png" alt="" title="" width="42" height="61">
										</a>
									</td>
								</tr>
							</table>
						</td>
					</tr>
					<tr>
						<td height="50" colspan="3"></td>
					</tr>
					<tr>
						<td valign="top" colspan="3" align="center">
							<p style="color: #76828c; font-family: Century Gothic,century_gothic_ff,Apple Gothic,Verdana,sans-serif; font-size: 50px; line-height: 55px; margin-top: 0px; margin-bottom: 5px;">{{$data['title'] or 'Title Goes Here'}}</p>
						</td>
					</tr>
					<tr>
						<td height="14" valign="top" colspan="3"></td>
					</tr>
					<tr>
						<td width="750" valign="top" colspan="3" align="center">
							<p style="color: #a1be73; font-family: Century Gothic,century_gothic_ff,Apple Gothic,Verdana,sans-serif; font-size: 20px; line-height: 31px; margin-top: 0px; margin-bottom: 0px;">{{$data['sub_title'] or 'Subtitle Goes Here'}}</p>
						</td>
					</tr>
					<tr>
						<td height="53" valign="top" colspan="3"></td>
					</tr>
				</table>
			</td>
		</tr>
	</table>

	<table cellpadding="0" cellspacing="0" border="0" width="850" align="center">
		<tr style="background-color: #ecf2e2;">
			<td height="50" colspan="3"></td>
		</tr>
		<tr style="background-color: #ecf2e2;">
			<td width="50px"></td>
			<td width="750px">
				<table>
					<tr>
						<td width="350" valign="top">
							<img align="left" class="image_fix" src="http://www.skinrenewal.co.za/uploads/newsletter_images/pic-christelle.jpg" alt="" title="" width="129" height="108">
							{!! $data['about_left_content'] !!}
						</td>
						<td width="50"></td>
						<td width="350" valign="top">
							{!! $data['about_left_content'] !!}
						</td>
					</tr>
				</table>
			</td>
			<td width="50px"></td>
		</tr>
		<tr style="background-color: #ecf2e2;">
			<td height="50" colspan="3"></td>
		</tr>
	</table>

	<table cellpadding="0" cellspacing="0" border="0" width="750" align="center">
		<tr>
			<td height="50" colspan="5"></td>
		</tr>
		<tr>
			<td valign="top">
				<img class="image_fix" src="http://www.skinrenewal.co.za/uploads/newsletter_images/promo_pic.png" alt="" title="" width="230" height="183">
				<p style="color: #76828c; font-family: Lucida Grande,Lucida Sans, Lucida Sans Unicode,Verdana,Geneva,sans-serif; font-size: 16px; line-height: 24px; margin-bottom: 5px; text-align:center;">Dermaquest</p>
				<p style="color: #a5adb3; font-family: Lucida Grande,Lucida Sans, Lucida Sans Unicode,Verdana,Geneva,sans-serif; font-size: 13px; line-height: 22px; margin-top: 0px; margin-bottom: 5px; text-align:center;"><strong>Product Promotion</strong></p>
				<p style="color: #a5adb3; font-family: Lucida Grande,Lucida Sans, Lucida Sans Unicode,Verdana,Geneva,sans-serif; font-size: 13px; line-height: 22px; margin-top: 0px; margin-bottom: 30px; text-align:center;">Purchase the Stem Cell 3D Complex or Stem Cell 3D Hydrafirm Serum and receive a FREE Stem Cell 3D Eyelift, valued at R1 095!</p>
				<a href="http://www.skinrenewal.co.za/loyalty-products" target="_blank" title="" style="color: #7f8c76; text-decoration: none;">
					<img class="image_fix" src="http://www.skinrenewal.co.za/uploads/newsletter_images/btn-read-more.png" alt="" title="" width="229" height="37">
				</a>
			</td>
			<td width="30" valign="top"></td>
			<td valign="top">
				<img class="image_fix" src="http://www.skinrenewal.co.za/uploads/newsletter_images/promo_pic.png" alt="" title="" width="230" height="183">
				<p style="color: #76828c; font-family: Lucida Grande,Lucida Sans, Lucida Sans Unicode,Verdana,Geneva,sans-serif; font-size: 16px; line-height: 24px; margin-bottom: 5px; text-align:center;">Dermaquest</p>
				<p style="color: #a5adb3; font-family: Lucida Grande,Lucida Sans, Lucida Sans Unicode,Verdana,Geneva,sans-serif; font-size: 13px; line-height: 22px; margin-top: 0px; margin-bottom: 5px; text-align:center;"><strong>Product Promotion</strong></p>
				<p style="color: #a5adb3; font-family: Lucida Grande,Lucida Sans, Lucida Sans Unicode,Verdana,Geneva,sans-serif; font-size: 13px; line-height: 22px; margin-top: 0px; margin-bottom: 30px; text-align:center;">Purchase the Stem Cell 3D Complex or Stem Cell 3D Hydrafirm Serum and receive a FREE Stem Cell 3D Eyelift, valued at R1 095!</p>
				<a href="http://www.skinrenewal.co.za/loyalty-products" target="_blank" title="" style="color: #7f8c76; text-decoration: none;">
					<img class="image_fix" src="http://www.skinrenewal.co.za/uploads/newsletter_images/btn-read-more.png" alt="" title="" width="229" height="37">
				</a>
			</td>
			<td width="30" valign="top"></td>
			<td valign="top">
				<img class="image_fix" src="http://www.skinrenewal.co.za/uploads/newsletter_images/promo_pic.png" alt="" title="" width="230" height="183">
				<p style="color: #76828c; font-family: Lucida Grande,Lucida Sans, Lucida Sans Unicode,Verdana,Geneva,sans-serif; font-size: 16px; line-height: 24px; margin-bottom: 5px; text-align:center;">Dermaquest</p>
				<p style="color: #a5adb3; font-family: Lucida Grande,Lucida Sans, Lucida Sans Unicode,Verdana,Geneva,sans-serif; font-size: 13px; line-height: 22px; margin-top: 0px; margin-bottom: 5px; text-align:center;"><strong>Product Promotion</strong></p>
				<p style="color: #a5adb3; font-family: Lucida Grande,Lucida Sans, Lucida Sans Unicode,Verdana,Geneva,sans-serif; font-size: 13px; line-height: 22px; margin-top: 0px; margin-bottom: 30px; text-align:center;">Purchase the Stem Cell 3D Complex or Stem Cell 3D Hydrafirm Serum and receive a FREE Stem Cell 3D Eyelift, valued at R1 095!</p>
				<a href="http://www.skinrenewal.co.za/loyalty-products" target="_blank" title="" style="color: #7f8c76; text-decoration: none;">
					<img class="image_fix" src="http://www.skinrenewal.co.za/uploads/newsletter_images/btn-read-more.png" alt="" title="" width="229" height="37">
				</a>
			</td>
		</tr>
		<tr>
			<td height="50" colspan="5"></td>
		</tr>
		<tr>
			<td valign="top">
				<img class="image_fix" src="http://www.skinrenewal.co.za/uploads/newsletter_images/promo_pic.png" alt="" title="" width="230" height="183">
				<p style="color: #76828c; font-family: Lucida Grande,Lucida Sans, Lucida Sans Unicode,Verdana,Geneva,sans-serif; font-size: 16px; line-height: 24px; margin-bottom: 5px; text-align:center;">Dermaquest</p>
				<p style="color: #a5adb3; font-family: Lucida Grande,Lucida Sans, Lucida Sans Unicode,Verdana,Geneva,sans-serif; font-size: 13px; line-height: 22px; margin-top: 0px; margin-bottom: 5px; text-align:center;"><strong>Product Promotion</strong></p>
				<p style="color: #a5adb3; font-family: Lucida Grande,Lucida Sans, Lucida Sans Unicode,Verdana,Geneva,sans-serif; font-size: 13px; line-height: 22px; margin-top: 0px; margin-bottom: 30px; text-align:center;">Purchase the Stem Cell 3D Complex or Stem Cell 3D Hydrafirm Serum and receive a FREE Stem Cell 3D Eyelift, valued at R1 095!</p>
				<a href="http://www.skinrenewal.co.za/loyalty-products" target="_blank" title="" style="color: #7f8c76; text-decoration: none;">
					<img class="image_fix" src="http://www.skinrenewal.co.za/uploads/newsletter_images/btn-read-more.png" alt="" title="" width="229" height="37">
				</a>
			</td>
			<td width="30" valign="top"></td>
			<td valign="top">
				<img class="image_fix" src="http://www.skinrenewal.co.za/uploads/newsletter_images/promo_pic.png" alt="" title="" width="230" height="183">
				<p style="color: #76828c; font-family: Lucida Grande,Lucida Sans, Lucida Sans Unicode,Verdana,Geneva,sans-serif; font-size: 16px; line-height: 24px; margin-bottom: 5px; text-align:center;">Dermaquest</p>
				<p style="color: #a5adb3; font-family: Lucida Grande,Lucida Sans, Lucida Sans Unicode,Verdana,Geneva,sans-serif; font-size: 13px; line-height: 22px; margin-top: 0px; margin-bottom: 5px; text-align:center;"><strong>Product Promotion</strong></p>
				<p style="color: #a5adb3; font-family: Lucida Grande,Lucida Sans, Lucida Sans Unicode,Verdana,Geneva,sans-serif; font-size: 13px; line-height: 22px; margin-top: 0px; margin-bottom: 30px; text-align:center;">Purchase the Stem Cell 3D Complex or Stem Cell 3D Hydrafirm Serum and receive a FREE Stem Cell 3D Eyelift, valued at R1 095!</p>
				<a href="http://www.skinrenewal.co.za/loyalty-products" target="_blank" title="" style="color: #7f8c76; text-decoration: none;">
					<img class="image_fix" src="http://www.skinrenewal.co.za/uploads/newsletter_images/btn-read-more.png" alt="" title="" width="229" height="37">
				</a>
			</td>
			<td width="30" valign="top"></td>
			<td valign="top">
				<img class="image_fix" src="http://www.skinrenewal.co.za/uploads/newsletter_images/promo_pic.png" alt="" title="" width="230" height="183">
				<p style="color: #76828c; font-family: Lucida Grande,Lucida Sans, Lucida Sans Unicode,Verdana,Geneva,sans-serif; font-size: 16px; line-height: 24px; margin-bottom: 5px; text-align:center;">Dermaquest</p>
				<p style="color: #a5adb3; font-family: Lucida Grande,Lucida Sans, Lucida Sans Unicode,Verdana,Geneva,sans-serif; font-size: 13px; line-height: 22px; margin-top: 0px; margin-bottom: 5px; text-align:center;"><strong>Product Promotion</strong></p>
				<p style="color: #a5adb3; font-family: Lucida Grande,Lucida Sans, Lucida Sans Unicode,Verdana,Geneva,sans-serif; font-size: 13px; line-height: 22px; margin-top: 0px; margin-bottom: 30px; text-align:center;">Purchase the Stem Cell 3D Complex or Stem Cell 3D Hydrafirm Serum and receive a FREE Stem Cell 3D Eyelift, valued at R1 095!</p>
				<a href="http://www.skinrenewal.co.za/loyalty-products" target="_blank" title="" style="color: #7f8c76; text-decoration: none;">
					<img class="image_fix" src="http://www.skinrenewal.co.za/uploads/newsletter_images/btn-read-more.png" alt="" title="" width="229" height="37">
				</a>
			</td>
		</tr>
		<tr>
			<td height="70" colspan="5"></td>
		</tr>
		<tr>
			<td width="750" valign="top" colspan="5" align="center">
				<p style="color: #76828c;  font-family: Century Gothic,century_gothic_ff,Apple Gothic,Verdana,sans-serif; font-size: 22px; line-height: 22px; margin-bottom: 5px; margin-top: 0px; font-weight:bold;">Current Loyalty Programme Members</p>
			</td>
		</tr>
		<tr>
			<td height="30" colspan="5"></td>
		</tr>
		<tr>
			<td width="200" valign="top">
				<img class="image_fix" src="http://www.skinrenewal.co.za/uploads/newsletter_images/members-jade.jpg" alt="" title="" width="199" height="162">
			</td>
			<td width="75" valign="top"></td>
			<td width="200" valign="top">
				<img class="image_fix" src="http://www.skinrenewal.co.za/uploads/newsletter_images/members-pearl.jpg" alt="" title="" width="200" height="162">
			</td>
			<td width="75" valign="top"></td>
			<td width="200" valign="top">
				<img class="image_fix" src="http://www.skinrenewal.co.za/uploads/newsletter_images/members-diamond.jpg" alt="" title="" width="200" height="162">
			</td>
		</tr>
		<tr>
			<td width="200" valign="middle" style="background-color:#b9d592;" align="center">
				<p style="color: #ffffff;  font-family: Century Gothic,century_gothic_ff,Apple Gothic,Verdana,sans-serif; font-size: 18px; line-height: 22px; margin-bottom: 0px; margin-top: 0px;">26 817 members</p>
			</td>
			<td width="75" valign="top">
				<img class="image_fix" src="http://www.skinrenewal.co.za/uploads/newsletter_images/spacer-eighteen.png" alt="" title="" width="75" height="42">
			</td>
			<td width="200" valign="center" style="background-color:#b9d592;" align="center">
				<p style="color: #ffffff;  font-family: Century Gothic,century_gothic_ff,Apple Gothic,Verdana,sans-serif; font-size: 18px; line-height: 22px; margin-bottom: 0px; margin-top: 0px;">1891 members</p>
			</td>
			<td width="75" valign="top">
				<img class="image_fix" src="http://www.skinrenewal.co.za/uploads/newsletter_images/spacer-eighteen.png" alt="" title="" width="75" height="42">
			</td>
			<td width="200" valign="center" style="background-color:#b9d592;" align="center">
				<p style="color: #ffffff;  font-family: Century Gothic,century_gothic_ff,Apple Gothic,Verdana,sans-serif; font-size: 18px; line-height: 22px; margin-bottom: 0px; margin-top: 0px;">860 members</p>
			</td>
		</tr>
		<tr>
			<td height="70" colspan="5"></td>
		</tr>
	</table>

	<table cellpadding="0" cellspacing="0" border="0" width="850" align="center">
		<tr style="background-color: #dae9c4;">
			<td width="50" valign="top"></td>
			<td width="750" valign="top" align="center">
				<img class="image_fix" src="http://www.skinrenewal.co.za/uploads/newsletter_images/number.png" alt="" title="" width="750" height="148">
				<p style="color: #7f8c76; font-family: Century Gothic,century_gothic_ff,Apple Gothic,Verdana,sans-serif; font-size: 14px; line-height: 14px; margin-bottom: 5px; margin-top: 0px;">
					<a href="http://www.skinrenewal.co.za" target="_blank" title="Styling Links" style="color: #7f8c76; text-decoration: none; margin-right:15px;">www.skinrenewal.co.za</a> &nbsp;&nbsp;&nbsp;

					<a href="http://www.bodyrenewal.co.za" target="_blank" title="Styling Links" style="color: #7f8c76; text-decoration: none; margin-right:15px;">www.bodyrenewal.co.za</a>&nbsp;&nbsp;&nbsp;

					<a href="http://www.healthrenewal.co.za" target="_blank" title="Styling Links" style="color: #7f8c76; text-decoration: none;">www.healthrenewal.co.za</a></p>
				<img class="image_fix" src="http://www.skinrenewal.co.za/uploads/newsletter_images/spacer-twentythree.png" alt="" title="" width="750" height="80">
			</td>
			<td width="50" valign="top"></td>
		</tr>
		<tr>
			<td height="100" colspan="3"></td>
		</tr>
	</table>

	<table border="0" cellpadding="0" cellspacing="0" width="100%" id="canspamBarWrapper" style="background-color:#FFFFFF; border-top:1px solid #E5E5E5;">
		<tr>
			<td align="center" valign="top" style="padding-top:20px; padding-bottom:20px;">
				<table border="0" cellpadding="0" cellspacing="0" id="canspamBar">
					<tr>
						<td align="center" valign="top" style="color:#606060; font-family:Helvetica, Arial, sans-serif; font-size:11px; line-height:150%; padding-right:20px; padding-bottom:5px; padding-left:20px; text-align:center;">
							This email was sent to <a href="mailto:*|EMAIL|*" target="_blank" style="color:#404040 !important;">*|EMAIL|*</a>
							<br>
							<a href="*|ABOUT_LIST|*" target="_blank" style="color:#404040 !important;"><em>why did I get this?</em></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="*|UNSUB|*" style="color:#404040 !important;">unsubscribe from this list</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="*|UPDATE_PROFILE|*" style="color:#404040 !important;">update subscription preferences</a>
							<br>
							*|LIST:ADDRESSLINE|*
							<br>
							<br>
						</td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
	<style type="text/css">
		@media only screen and (max-width: 480px){
			table[id="canspamBar"] td{font-size:14px !important;}
			table[id="canspamBar"] td a{display:block !important; margin-top:10px !important;}
		}
	</style>
@endsection
