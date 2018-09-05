
<?php
// basic sequence with LDAP is connect, bind, search, interpret search
// result, close connection

include("secrets.php");

echo "<h3>LDAP query test</h3>";
echo "Connecting ...";
$ds=ldap_connect($AUTH_LDAP_SERVER_URL);  // must be a valid LDAP server!
echo "connect result is " . $ds . "<br />";

if ($ds) { 
    echo "Binding ..."; 
    $r=ldap_bind($ds, $AUTH_LDAP_BIND_DN, $AUTH_LDAP_BIND_PASSWORD);     // this is an "anonymous" bind, typically
                           // read-only access
    echo "Bind result is " . $r . "<br />";

    echo "Searching for (sn=S*) ...";
    // Search surname entry
    $sr=ldap_search($ds, $AUTH_LDAP_USER_SEARCH_DN, $AUTH_LDAP_USER_SEARCH_STR);
    echo "Search result is " . $sr . "<br />";

    echo "Number of entries returned is " . ldap_count_entries($ds, $sr) . "<br />";

    echo "Getting entries ...<p>";
    $info = ldap_get_entries($ds, $sr);
    echo "Data for " . $info["count"] . " items returned:<p>";

    for ($i=0; $i<$info["count"]; $i++) {
        echo "dn is: " . $info[$i]["dn"] . "<br />";
        echo "first cn entry is: " . $info[$i]["cn"][0] . "<br />";
        echo "first email entry is: " . $info[$i]["mail"][0] . "<br /><hr />";
    }

    echo "Closing connection";
    ldap_close($ds);

} else {
    echo "<h4>Unable to connect to LDAP server</h4>";
}
?>
