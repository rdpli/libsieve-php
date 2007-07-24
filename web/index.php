<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<title>libsieve-php - A PHP Sieve library</title>
</head>
<body style="font-family:sans-serif; font-size:13px">
<div style="width:760px; margin-left:auto; margin-right:auto">

<div style="border-style:dashed; border-width:2px; border-color:silver; padding:10px">
	<h1 style="text-align:center">Welcome to this lousy page</h1>
	<p style="text-align:justify">
		<span style="font-family:monospace">libsieve-php</span> is aiming at being a Sieve
		[<a href="http://tools.ietf.org/html/rfc3028" target="_top">RFC 3028</a>]
		mail filtering language library. Once finished you'll be able to manage sieve scripts with it. It currently consists
		of a Sieve script parser that supports some extensions (mostly the ones Cyrus IMAPd supports, since the author wants
		to use it with his mailserver).
	</p>
	<p style="text-align:justify">
		Next step will be to implement
		writing support into the parser so that it can write out the scripts it read. Then there will be added support for the
		<a href="http://tools.ietf.org/html/draft-martin-managesieve" target="_top">MANAGESIEVE</a> protocol which will allow you to download
		scripts from, upload them to and manage them on a server like timsieved. When all that is done I will hack up some
		interface classes that will enable you to access and modify parsed scripts without the knowledge of the libraries internals.
	</p>
	<p>
		<span style="font-weight:bold">Current state: ALPHA</span>. <a href="http://sourceforge.net/svn/?group_id=184171" target="_top">Try it</a>,
		but don't expect it to be comfortable or bug free.
	</p>
	<p style="text-align:justify">
		Hack in a Sieve script in the textarea below and try the sieve parser of libsieve-php in action.
		Note that currently the <span style="font-family:monospace">base spec</span> and the extensions
		<span style="font-family:monospace">vacation, subaddress, relational, regex, imapflags, copy</span>
		and <span style="font-family:monospace">notify</span> are supported by the parser. If you find any
		bugs don't hesitate and <a href="http://sourceforge.net/tracker/?func=add&amp;group_id=184171&amp;atid=908185" target="_top">report
		them via the projects bug tracker</a>. I'm especially happy for reports on malformed scripts getting
		through as well as misleading parser status messages.
	</p>
	
	<form action="validate.php" method="post">
		<p style="text-align:center">
			<textarea name="script" cols="80" rows="25">require "fileinto";
if address :localpart ["To", "CC", "BCC"] ["heiko"] {
    fileinto "INBOX.personal";
}</textarea>
			<input type="submit" value="Validate Sieve Script" />
		</p>
	</form>
</div>

<p>
<a href="http://sourceforge.net/projects/libsieve-php/" target="_top">
	<img src="http://sflogo.sourceforge.net/sflogo.php?group_id=184171&amp;type=1"
	     width="88" height="31" border="0" alt="SourceForge.net Logo" /></a>
<a href="http://validator.w3.org/check?uri=referer" target="_top">
	<img src="http://www.w3.org/Icons/valid-xhtml10" height="31" width="88"
	     border="0" alt="Valid XHTML 1.0 Transitional" /></a>
</p>

</div>
</body>
</html>
