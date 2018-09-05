<?php
$AUTH_LDAP_SERVER_URL = "ldap://NEK_IP:3268";

$AUTH_LDAP_BIND_DN = "CN=NEK_USERNAME,OU=System;OU=Users;OU=FRI;DC=fri1;DC=uni-lj;DC=si";
$AUTH_LDAP_BIND_PASSWORD = "TEGANEPOVEM";
$AUTH_LDAP_USER_SEARCH_DN = "DC=uni-lj,DC=si";
$AUTH_LDAP_USER_SEARCH_STR = "(userPrincipalName=USERNAME@fri1.uni-lj.si)";

# $AUTH_LDAP_USER_SEARCH = LDAPSearch("DC=uni-lj,DC=si",
#     ldap.SCOPE_SUBTREE, "(userPrincipalName=%(user)s)")

# $AUTH_LDAP_GROUP_SEARCH = LDAPSearch("DC=uni-lj,DC=si",
#     ldap.SCOPE_SUBTREE, "(objectClass=group)"
# )
# AUTH_LDAP_GROUP_TYPE = ULNestedGroupOfNamesType(name_attr="cn")

# AUTH_LDAP_MIRROR_GROUPS = True

# AUTH_LDAP_USER_ATTR_MAP = {
#     "first_name": "givenName",
#     "last_name": "sn",
#     "email": "mail"
#}


?> 
