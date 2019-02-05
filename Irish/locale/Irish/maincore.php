function showdate ($format, $val) {
    global $settings;
    $pos = strpos ($format, "%B");
    if ($pos! == false) {
        $months = $locale [' months_d '];
        $month = $months [date ("n", $val + ($settings [' timeoffset '] * 3600)) - 1];
        $format = substr_replace ($format, $month, $pos, 2);
    };
    if ($format == "shortdate" || $format == "longdate" || $format == "forumdate") {
        return strftime ($settings [$format], $val + ($settings [' timeoffset '] * 3600));
    } else {
        return strftime ($format, $val + ($settings [' timeoffset '] * 3600));
    }
}
