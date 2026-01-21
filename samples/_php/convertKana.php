<?php
function convertJapaneseKun($s)
{
	$s=str_replace("PP","ã£P",$s);
	$s=str_replace("SS","ã£S",$s);
	$s=str_replace("TT","ã£T",$s);

	$s=str_replace("AA","Aã‚",$s);
	$s=str_replace("II","Iã„",$s);
	$s=str_replace("UU","Uã†",$s);
	$s=str_replace("EE","Eãˆ",$s);
	$s=str_replace("OO","OãŠ",$s);

	$s=str_replace("KYA","ãã‚ƒ",$s);
	$s=str_replace("KYU","ãã‚…",$s);
	$s=str_replace("KYO","ãã‚‡",$s);

	$s=str_replace("KA","ã‹",$s);
	$s=str_replace("KI","ã",$s);
	$s=str_replace("KU","ã",$s);
	$s=str_replace("KE","ã‘",$s);
	$s=str_replace("KO","ã“",$s);

	$s=str_replace("GYA","ãŽã‚ƒ",$s);
	$s=str_replace("GYU","ãŽã‚…",$s);
	$s=str_replace("GYO","ãŽã‚‡",$s);
	
	$s=str_replace("GA","ãŒ",$s);
	$s=str_replace("GI","ãŽ",$s);
	$s=str_replace("GU","ã",$s);
	$s=str_replace("GE","ã’",$s);
	$s=str_replace("GO","ã”",$s);

	$s=str_replace("CHA","ã¡ã‚ƒ",$s);
	$s=str_replace("CHU","ã¡ã‚…",$s);
	$s=str_replace("CHO","ã¡ã‚‡",$s);
	
	// tsu before su
	$s=str_replace("TA","ãŸ",$s);
	$s=str_replace("CHI","ã¡",$s);
	$s=str_replace("TSU","ã¤",$s);
	$s=str_replace("TE","ã¦",$s);
	$s=str_replace("TO","ã¨",$s);

	$s=str_replace("SHA","ã—ã‚ƒ",$s);
	$s=str_replace("SHU","ã—ã‚…",$s);
	$s=str_replace("SHO","ã—ã‚‡",$s);

	$s=str_replace("SA","ã•",$s);
	$s=str_replace("SHI","ã—",$s);
	$s=str_replace("SU","ã™",$s);
	$s=str_replace("SE","ã›",$s);
	$s=str_replace("SO","ã",$s);

	$s=str_replace("JA","ã˜ã‚ƒ",$s);
	$s=str_replace("JU","ã˜ã‚…",$s);
	$s=str_replace("JO","ã˜ã‚‡",$s);
	
	$s=str_replace("ZA","ã–",$s);
	$s=str_replace("JI","ã˜",$s);
	$s=str_replace("ZU","ãš",$s);
	$s=str_replace("ZE","ãœ",$s);
	$s=str_replace("ZO","ãž",$s);

	$s=str_replace("JA","ã¢ã‚ƒ",$s);
	$s=str_replace("JU","ã¢ã‚…",$s);
	$s=str_replace("JO","ã¢ã‚‡",$s);

	$s=str_replace("DA","ã ",$s);
	$s=str_replace("JI","ã¢",$s);
	$s=str_replace("ZU","ãš",$s);
	$s=str_replace("DE","ã§",$s);
	$s=str_replace("DO","ã©",$s);
		
	$s=str_replace("NYA","ã«ã‚ƒ",$s);
	$s=str_replace("NYU","ã«ã‚…",$s);
	$s=str_replace("NYO","ã«ã‚‡",$s);
	
	$s=str_replace("NA","ãª",$s);
	$s=str_replace("NI","ã«",$s);
	$s=str_replace("NU","ã¬",$s);
	$s=str_replace("NE","ã­",$s);
	$s=str_replace("NO","ã®",$s);

	$s=str_replace("HYA","ã²ã‚ƒ",$s);
	$s=str_replace("HYU","ã²ã‚…",$s);
	$s=str_replace("HYO","ã²ã‚‡",$s);

	$s=str_replace("HA","ã¯",$s);
	$s=str_replace("HI","ã²",$s);
	$s=str_replace("FU","ãµ",$s);
	$s=str_replace("HE","ã¸",$s);
	$s=str_replace("HO","ã»",$s);

	$s=str_replace("BYA","ã³ã‚ƒ",$s);
	$s=str_replace("BYU","ã³ã‚…",$s);
	$s=str_replace("BYO","ã³ã‚‡",$s);

	$s=str_replace("BA","ã°",$s);
	$s=str_replace("BI","ã³",$s);
	$s=str_replace("BU","ã¶",$s);
	$s=str_replace("BE","ã¹",$s);
	$s=str_replace("BO","ã¼",$s);

	$s=str_replace("PYA","ã´ã‚ƒ",$s);
	$s=str_replace("PYU","ã´ã‚…",$s);
	$s=str_replace("PYO","ã´ã‚‡",$s);

	$s=str_replace("PA","ã±",$s);
	$s=str_replace("PI","ã´",$s);
	$s=str_replace("PU","ã·",$s);
	$s=str_replace("PE","ãº",$s);
	$s=str_replace("PO","ã½",$s);

	$s=str_replace("MYA","ã¿ã‚ƒ",$s);
	$s=str_replace("MYU","ã¿ã‚…",$s);
	$s=str_replace("MYO","ã¿ã‚‡",$s);
	
	$s=str_replace("MA","ã¾",$s);
	$s=str_replace("MI","ã¿",$s);
	$s=str_replace("MU","ã‚€",$s);
	$s=str_replace("ME","ã‚",$s);
	$s=str_replace("MO","ã‚‚",$s);

	$s=str_replace("RYA","ã‚Šã‚ƒ",$s);
	$s=str_replace("RYU","ã‚Šã‚…",$s);
	$s=str_replace("RYO","ã‚Šã‚‡",$s);

	$s=str_replace("RA","ã‚‰",$s);
	$s=str_replace("RI","ã‚Š",$s);
	$s=str_replace("RU","ã‚‹",$s);
	$s=str_replace("RE","ã‚Œ",$s);
	$s=str_replace("RO","ã‚",$s);

	// ya after [x]ya
	$s=str_replace("YA","ã‚„",$s);
	$s=str_replace("YU","ã‚†",$s);
	$s=str_replace("YO","ã‚ˆ",$s);
	
	$s=str_replace("WA","ã‚",$s);
	$s=str_replace("WO","ã‚’",$s);

	$s=str_replace("A","ã‚",$s);
	$s=str_replace("I","ã„",$s);
	$s=str_replace("U","ã†",$s);
	$s=str_replace("E","ãˆ",$s);
	$s=str_replace("O","ãŠ",$s);
	
	$s=str_replace("N","ã‚“",$s);
	
	return $s;
}
function convertJapaneseOn($s)
{
	$s=str_replace("PP","ãƒƒP",$s);
	$s=str_replace("SS","ãƒƒS",$s);
	$s=str_replace("TT","ãƒƒT",$s);

	$s=str_replace("AA","Aã‚¢",$s);
	$s=str_replace("II","Iã‚¤",$s);
	$s=str_replace("UU","Uã‚¦",$s);
	$s=str_replace("EE","Eã‚¨",$s);
	$s=str_replace("OO","Oã‚ª",$s);
	
	$s=str_replace("KYA","ã‚­ãƒ£",$s);
	$s=str_replace("KYU","ã‚­ãƒ¥",$s);
	$s=str_replace("KYO","ã‚­ãƒ§",$s);
	$s=str_replace("GYA","ã‚®ãƒ£",$s);
	$s=str_replace("GYU","ã‚®ãƒ¥",$s);
	$s=str_replace("GYO","ã‚®ãƒ§",$s);

	$s=str_replace("KA","ã‚«",$s);
	$s=str_replace("KI","ã‚­",$s);
	$s=str_replace("KU","ã‚¯",$s);
	$s=str_replace("KE","ã‚±",$s);
	$s=str_replace("KO","ã‚³",$s);

	$s=str_replace("GA","ã‚¬",$s);
	$s=str_replace("GI","ã‚®",$s);
	$s=str_replace("GU","ã‚°",$s);
	$s=str_replace("GE","ã‚²",$s);
	$s=str_replace("GO","ã‚´",$s);

	// tsu before su
	$s=str_replace("CHA","ãƒãƒ£",$s);
	$s=str_replace("CHU","ãƒãƒ¥",$s);
	$s=str_replace("CHO","ãƒãƒ§",$s);

	$s=str_replace("TA","ã‚¿",$s);
	$s=str_replace("CHI","ãƒ",$s);
	$s=str_replace("TSU","ãƒ„",$s);
	$s=str_replace("TE","ãƒ†",$s);
	$s=str_replace("TO","ãƒˆ",$s);

	$s=str_replace("SHA","ã‚·ãƒ£",$s);
	$s=str_replace("SHU","ã‚·ãƒ¥",$s);
	$s=str_replace("SHO","ã‚·ãƒ§",$s);
	
	$s=str_replace("SA","ã‚µ",$s);
	$s=str_replace("SHI","ã‚·",$s);
	$s=str_replace("SU","ã‚¹",$s);
	$s=str_replace("SE","ã‚»",$s);
	$s=str_replace("SO","ã‚½",$s);

	$s=str_replace("JA","ã‚¸ãƒ£",$s);
	$s=str_replace("JU","ã‚¸ãƒ¥",$s);
	$s=str_replace("JO","ã‚¸ãƒ§",$s);
	
	$s=str_replace("ZA","ã‚¶",$s);
	$s=str_replace("JI","ã‚¸",$s);
	$s=str_replace("ZU","ã‚º",$s);
	$s=str_replace("ZE","ã‚¼",$s);
	$s=str_replace("ZO","ã‚¾",$s);

	$s=str_replace("CHA","ãƒãƒ£",$s);
	$s=str_replace("CHU","ãƒãƒ¥",$s);
	$s=str_replace("CHO","ãƒãƒ§",$s);

	$s=str_replace("TA","ã‚¿",$s);
	$s=str_replace("CHI","ãƒ",$s);
	$s=str_replace("TSU","ãƒ„",$s);
	$s=str_replace("TE","ãƒ†",$s);
	$s=str_replace("TO","ãƒˆ",$s);

	$s=str_replace("JA","ãƒ‚ãƒ£",$s);
	$s=str_replace("JU","ãƒ‚ãƒ¥",$s);
	$s=str_replace("JO","ãƒ‚ãƒ§",$s);

	$s=str_replace("DA","ãƒ€",$s);
	$s=str_replace("JI","ãƒ‚",$s);
	$s=str_replace("ZU","ã‚º",$s);
	$s=str_replace("DE","ãƒ‡",$s);
	$s=str_replace("DO","ãƒ‰",$s);
		
	$s=str_replace("NYA","ãƒ‹ãƒ£",$s);
	$s=str_replace("NYU","ãƒ‹ãƒ¥",$s);
	$s=str_replace("NYO","ãƒ‹ãƒ§",$s);

	$s=str_replace("NA","ãƒŠ",$s);
	$s=str_replace("NI","ãƒ‹",$s);
	$s=str_replace("NU","ãƒŒ",$s);
	$s=str_replace("NE","ãƒ",$s);
	$s=str_replace("NO","ãƒŽ",$s);

	$s=str_replace("HYA","ãƒ’ãƒ£",$s);
	$s=str_replace("HYU","ãƒ’ãƒ¥",$s);
	$s=str_replace("HYO","ãƒ’ãƒ§",$s);
	
	$s=str_replace("HA","ãƒ",$s);
	$s=str_replace("HI","ãƒ’",$s);
	$s=str_replace("FU","ãƒ•",$s);
	$s=str_replace("HE","ãƒ˜",$s);
	$s=str_replace("HO","ãƒ›",$s);

	$s=str_replace("BYA","ãƒ“ãƒ£",$s);
	$s=str_replace("BYU","ãƒ“ãƒ¥",$s);
	$s=str_replace("BYO","ãƒ“ãƒ§",$s);

	$s=str_replace("BA","ãƒ",$s);
	$s=str_replace("BI","ãƒ“",$s);
	$s=str_replace("BU","ãƒ–",$s);
	$s=str_replace("BE","ãƒ™",$s);
	$s=str_replace("BO","ãƒœ",$s);

	$s=str_replace("PYA","ãƒ”ãƒ£",$s);
	$s=str_replace("PYU","ãƒ”ãƒ¥",$s);
	$s=str_replace("PYO","ãƒ”ãƒ§",$s);

	$s=str_replace("PA","ãƒ‘",$s);
	$s=str_replace("PI","ãƒ”",$s);
	$s=str_replace("PU","ãƒ—",$s);
	$s=str_replace("PE","ãƒš",$s);
	$s=str_replace("PO","ãƒ",$s);

	$s=str_replace("MYA","ãƒŸãƒ£",$s);
	$s=str_replace("MYU","ãƒŸãƒ¥",$s);
	$s=str_replace("MYO","ãƒŸãƒ§",$s);

	$s=str_replace("MA","ãƒž",$s);
	$s=str_replace("MI","ãƒŸ",$s);
	$s=str_replace("MU","ãƒ ",$s);
	$s=str_replace("ME","ãƒ¡",$s);
	$s=str_replace("MO","ãƒ¢",$s);

	$s=str_replace("RYA","ãƒªãƒ£",$s);
	$s=str_replace("RYU","ãƒªãƒ¥",$s);
	$s=str_replace("RYO","ãƒªãƒ§",$s);

	$s=str_replace("RA","ãƒ©",$s);
	$s=str_replace("RI","ãƒª",$s);
	$s=str_replace("RU","ãƒ«",$s);
	$s=str_replace("RE","ãƒ¬",$s);
	$s=str_replace("RO","ãƒ­",$s);

	// ya after [x]ya
	$s=str_replace("YA","ãƒ¤",$s);
	$s=str_replace("YU","ãƒ¦",$s);
	$s=str_replace("YO","ãƒ¨",$s);

	$s=str_replace("WA","ãƒ¯",$s);
	$s=str_replace("WO","ãƒ²",$s);

	$s=str_replace("A","ã‚¢",$s);
	$s=str_replace("I","ã‚¤",$s);
	$s=str_replace("U","ã‚¦",$s);
	$s=str_replace("E","ã‚¨",$s);
	$s=str_replace("O","ã‚ª",$s);

	$s=str_replace("N","ãƒ³",$s);

	return $s;
}
?>

