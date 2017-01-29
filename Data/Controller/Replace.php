<?php

/*
 * License: MIT
 *    Time: 2017-01-20 11:36:21
 *    Name: Replace.php
 *    Note: CloudGate Replace Controller
 *  Author: Eval,BurpSuite
 */

# Verify String
function Verify($DNS=NULL,$SERVER1=NULL,$SERVER2=NULL,$SERVER3=NULL,
                $SERVER4=NULL,$SERVER5=NULL,$SERVER6=NULL,$SERVER7=NULL,$SERVER8=NULL,
                $SERVER9=NULL,$SERVER0=NULL,$Group=NULL,$Rule=NULL,$IPV6=NULL,
                $Apple=NULL,$WIFIAccess=NULL,$AutoGroup=NULL,$Interval=NULL,$Tolerance=NULL)
{
    global $DNS,$SERVER1,$SERVER2,$SERVER3,$SERVER4,$SERVER5,$SERVER6;
    global $SERVER7,$SERVER8,$SERVER9,$SERVER0,$Rule,$Group,$IPV6;
    global $Apple,$WIFIAccess,$AutoGroup,$Interval,$Tolerance;
    !empty($DNS) ? $DNS = $DNS : $DNS = 'true,2,8.8.8.8,8.8.4.4';
    !empty($SERVER1) ? $SERVER1 = $SERVER1:$SERVER1 = 'NONE1,custom,127.0.0.1,80,aes-256-cfb,Password';
    !empty($SERVER2) ? $SERVER2 = $SERVER2:$SERVER2 = 'NONE2,custom,127.0.0.1,80,aes-256-cfb,Password';
    !empty($SERVER3) ? $SERVER3 = $SERVER3:$SERVER3 = 'NONE3,custom,127.0.0.1,80,aes-256-cfb,Password';
    !empty($SERVER4) ? $SERVER4 = $SERVER4:$SERVER4 = 'NONE4,custom,127.0.0.1,80,aes-256-cfb,Password';
    !empty($SERVER5) ? $SERVER5 = $SERVER5:$SERVER5 = 'NONE5,custom,127.0.0.1,80,aes-256-cfb,Password';
    !empty($SERVER6) ? $SERVER6 = $SERVER6:$SERVER6 = 'NONE6,custom,127.0.0.1,80,aes-256-cfb,Password';
    !empty($SERVER7) ? $SERVER7 = $SERVER7:$SERVER7 = 'NONE7,custom,127.0.0.1,80,aes-256-cfb,Password';
    !empty($SERVER8) ? $SERVER8 = $SERVER8:$SERVER8 = 'NONE8,custom,127.0.0.1,80,aes-256-cfb,Password';
    !empty($SERVER9) ? $SERVER9 = $SERVER9:$SERVER9 = 'NONE9,custom,127.0.0.1,80,aes-256-cfb,Password';
    !empty($SERVER0) ? $SERVER0 = $SERVER0:$SERVER0 = 'NONE0,custom,127.0.0.1,80,aes-256-cfb,Password';
    !empty($Group) ? $Group = $Group : $Group = '2';
    !empty($Rule)  ? $Rule  = $Rule  : $Rule  = 'false';
    !empty($IPV6)  ? $IPV6  = $IPV6  : $IPV6  = 'false';
    !empty($Apple) ? $Apple = $Apple : $Apple = 'false';
    !empty($WIFIAccess) ? $WIFIAccess = $WIFIAccess : $WIFIAccess = 'false';
    !empty($AutoGroup)  ? $AutoGroup  = $AutoGroup  : $AutoGroup  = 'false';
    !empty($Interval)   ? $Interval   = $Interval   : $Interval   = '600';
    !empty($Tolerance)  ? $Tolerance  = $Tolerance  : $Tolerance  = '200';
}

# Explode String
function Exp_lode($Group='2',$DNS=NULL,$SERVER1=NULL,$SERVER2=NULL,$SERVER3=NULL,$SERVER4=NULL,$SERVER5=NULL,$SERVER6=NULL,$SERVER7=NULL,$SERVER8=NULL,$SERVER9=NULL,$SERVER0=NULL){
    global $SERVER1_Exp,$SERVER2_Exp,$SERVER3_Exp,$DNS_ExpA;
    global $SERVER_Implode,$DNS_Implode,$Potatso_List;
    $SERVER1_ExpA = explode(',',$SERVER1,3);
    $SERVER2_ExpA = explode(',',$SERVER2,3);
    $SERVER3_ExpA = explode(',',$SERVER3,3);
    $SERVER4_ExpA = explode(',',$SERVER4,3);
    $SERVER5_ExpA = explode(',',$SERVER5,3);
    $SERVER6_ExpA = explode(',',$SERVER6,3);
    $SERVER7_ExpA = explode(',',$SERVER7,3);
    $SERVER8_ExpA = explode(',',$SERVER8,3);
    $SERVER9_ExpA = explode(',',$SERVER9,3);
    $SERVER0_ExpA = explode(',',$SERVER0,3);
    $SERVER1_Exp  = array($SERVER1_ExpA[0],$SERVER2_ExpA[0],$SERVER3_ExpA[0],$SERVER4_ExpA[0],$SERVER5_ExpA[0],$SERVER6_ExpA[0],$SERVER7_ExpA[0],$SERVER8_ExpA[0],$SERVER9_ExpA[0],$SERVER0_ExpA[0]);
    $SERVER2_Exp  = array($SERVER1_ExpA[1],$SERVER2_ExpA[1],$SERVER3_ExpA[1],$SERVER4_ExpA[1],$SERVER5_ExpA[1],$SERVER6_ExpA[1],$SERVER7_ExpA[1],$SERVER8_ExpA[1],$SERVER9_ExpA[1],$SERVER0_ExpA[1]);
    $SERVER3_Exp  = array($SERVER1_ExpA[2],$SERVER2_ExpA[2],$SERVER3_ExpA[2],$SERVER4_ExpA[2],$SERVER5_ExpA[2],$SERVER6_ExpA[2],$SERVER7_ExpA[2],$SERVER8_ExpA[2],$SERVER9_ExpA[2],$SERVER0_ExpA[2]);
    $Group==='10'?$SERVER_Imp = array($SERVER1_ExpA[0],$SERVER2_ExpA[0],$SERVER3_ExpA[0],$SERVER4_ExpA[0],$SERVER5_ExpA[0],$SERVER6_ExpA[0],$SERVER7_ExpA[0],$SERVER8_ExpA[0],$SERVER9_ExpA[0],$SERVER0_ExpA[0]):false;
    $Group==='9'?$SERVER_Imp = array($SERVER1_ExpA[0],$SERVER2_ExpA[0],$SERVER3_ExpA[0],$SERVER4_ExpA[0],$SERVER5_ExpA[0],$SERVER6_ExpA[0],$SERVER7_ExpA[0],$SERVER8_ExpA[0],$SERVER9_ExpA[0]):false;
    $Group==='8'?$SERVER_Imp = array($SERVER1_ExpA[0],$SERVER2_ExpA[0],$SERVER3_ExpA[0],$SERVER4_ExpA[0],$SERVER5_ExpA[0],$SERVER6_ExpA[0],$SERVER7_ExpA[0],$SERVER8_ExpA[0]):false;
    $Group==='7'?$SERVER_Imp = array($SERVER1_ExpA[0],$SERVER2_ExpA[0],$SERVER3_ExpA[0],$SERVER4_ExpA[0],$SERVER5_ExpA[0],$SERVER6_ExpA[0],$SERVER7_ExpA[0]):false;
    $Group==='6'?$SERVER_Imp = array($SERVER1_ExpA[0],$SERVER2_ExpA[0],$SERVER3_ExpA[0],$SERVER4_ExpA[0],$SERVER5_ExpA[0],$SERVER6_ExpA[0]):false;
    $Group==='5'?$SERVER_Imp = array($SERVER1_ExpA[0],$SERVER2_ExpA[0],$SERVER3_ExpA[0],$SERVER4_ExpA[0],$SERVER5_ExpA[0]):false;
    $Group==='4'?$SERVER_Imp = array($SERVER1_ExpA[0],$SERVER2_ExpA[0],$SERVER3_ExpA[0],$SERVER4_ExpA[0]):false;
    $Group==='3'?$SERVER_Imp = array($SERVER1_ExpA[0],$SERVER2_ExpA[0],$SERVER3_ExpA[0]):false;
    $Group==='2'?$SERVER_Imp = array($SERVER1_ExpA[0],$SERVER2_ExpA[0]):false;
    $Group==='1'?$SERVER_Imp = array($SERVER1_ExpA[0]):false;
    $SERVER_Implode = implode(', ',$SERVER_Imp);
    $DNS_ExpA       = explode(',',$DNS);
    $DNS_ExpA[0]==='true'&&$DNS_ExpA[1]==='4'?$DNS_Exp = array($DNS_ExpA[2],$DNS_ExpA[3],$DNS_ExpA[4],$DNS_ExpA[5]):false;
    $DNS_ExpA[0]==='true'&&$DNS_ExpA[1]==='3'?$DNS_Exp = array($DNS_ExpA[2],$DNS_ExpA[3],$DNS_ExpA[4]):false;
    $DNS_ExpA[0]==='true'&&$DNS_ExpA[1]==='2'?$DNS_Exp = array($DNS_ExpA[2],$DNS_ExpA[3]):false;
    $DNS_ExpA[0]==='true'&&$DNS_ExpA[1]==='1'?$DNS_Exp = array($DNS_ExpA[2]):false;
    $DNS_Implode   = implode(', ',$DNS_Exp);
    $Potatso1_Exp  = explode(',',$SERVER1);
    $Potatso2_Exp  = explode(',',$SERVER2);
    $Potatso3_Exp  = explode(',',$SERVER3);
    $Potatso4_Exp  = explode(',',$SERVER4);
    $Potatso5_Exp  = explode(',',$SERVER5);
    $Potatso6_Exp  = explode(',',$SERVER6);
    $Potatso7_Exp  = explode(',',$SERVER7);
    $Potatso8_Exp  = explode(',',$SERVER8);
    $Potatso9_Exp  = explode(',',$SERVER9);
    $Potatso0_Exp  = explode(',',$SERVER0);
    $Potatso1_List = "- name: {$Potatso1_Exp[0]}\r\n  type: {$Potatso1_Exp[1]}\r\n  host: {$Potatso1_Exp[2]}\r\n  port: {$Potatso1_Exp[3]}\r\n  encryption: {$Potatso1_Exp[4]}\r\n  password: {$Potatso1_Exp[5]}\r\n";
    $Potatso2_List = "- name: {$Potatso2_Exp[0]}\r\n  type: {$Potatso2_Exp[1]}\r\n  host: {$Potatso2_Exp[2]}\r\n  port: {$Potatso2_Exp[3]}\r\n  encryption: {$Potatso2_Exp[4]}\r\n  password: {$Potatso2_Exp[5]}\r\n";
    $Potatso3_List = "- name: {$Potatso3_Exp[0]}\r\n  type: {$Potatso3_Exp[1]}\r\n  host: {$Potatso3_Exp[2]}\r\n  port: {$Potatso3_Exp[3]}\r\n  encryption: {$Potatso3_Exp[4]}\r\n  password: {$Potatso3_Exp[5]}\r\n";
    $Potatso4_List = "- name: {$Potatso4_Exp[0]}\r\n  type: {$Potatso4_Exp[1]}\r\n  host: {$Potatso4_Exp[2]}\r\n  port: {$Potatso4_Exp[3]}\r\n  encryption: {$Potatso4_Exp[4]}\r\n  password: {$Potatso4_Exp[5]}\r\n";
    $Potatso5_List = "- name: {$Potatso5_Exp[0]}\r\n  type: {$Potatso5_Exp[1]}\r\n  host: {$Potatso5_Exp[2]}\r\n  port: {$Potatso5_Exp[3]}\r\n  encryption: {$Potatso5_Exp[4]}\r\n  password: {$Potatso5_Exp[5]}\r\n";
    $Potatso6_List = "- name: {$Potatso6_Exp[0]}\r\n  type: {$Potatso6_Exp[1]}\r\n  host: {$Potatso6_Exp[2]}\r\n  port: {$Potatso6_Exp[3]}\r\n  encryption: {$Potatso6_Exp[4]}\r\n  password: {$Potatso6_Exp[5]}\r\n";
    $Potatso7_List = "- name: {$Potatso7_Exp[0]}\r\n  type: {$Potatso7_Exp[1]}\r\n  host: {$Potatso7_Exp[2]}\r\n  port: {$Potatso7_Exp[3]}\r\n  encryption: {$Potatso7_Exp[4]}\r\n  password: {$Potatso7_Exp[5]}\r\n";
    $Potatso8_List = "- name: {$Potatso8_Exp[0]}\r\n  type: {$Potatso8_Exp[1]}\r\n  host: {$Potatso8_Exp[2]}\r\n  port: {$Potatso8_Exp[3]}\r\n  encryption: {$Potatso8_Exp[4]}\r\n  password: {$Potatso8_Exp[5]}\r\n";
    $Potatso9_List = "- name: {$Potatso9_Exp[0]}\r\n  type: {$Potatso9_Exp[1]}\r\n  host: {$Potatso9_Exp[2]}\r\n  port: {$Potatso9_Exp[3]}\r\n  encryption: {$Potatso9_Exp[4]}\r\n  password: {$Potatso9_Exp[5]}\r\n";
    $Potatso0_List = "- name: {$Potatso0_Exp[0]}\r\n  type: {$Potatso0_Exp[1]}\r\n  host: {$Potatso0_Exp[2]}\r\n  port: {$Potatso0_Exp[3]}\r\n  encryption: {$Potatso0_Exp[4]}\r\n  password: {$Potatso0_Exp[5]}\r\n";
    $Group<'11'?$Potatso_List="{$Potatso1_List}{$Potatso2_List}{$Potatso3_List}{$Potatso4_List}{$Potatso5_List}{$Potatso6_List}{$Potatso7_List}{$Potatso8_List}{$Potatso9_List}{$Potatso0_List}":false;
    $Group<'10'?$Potatso_List="{$Potatso1_List}{$Potatso2_List}{$Potatso3_List}{$Potatso4_List}{$Potatso5_List}{$Potatso6_List}{$Potatso7_List}{$Potatso8_List}{$Potatso9_List}":false;
    $Group<'9'?$Potatso_List ="{$Potatso1_List}{$Potatso2_List}{$Potatso3_List}{$Potatso4_List}{$Potatso5_List}{$Potatso6_List}{$Potatso7_List}{$Potatso8_List}":false;
    $Group<'8'?$Potatso_List ="{$Potatso1_List}{$Potatso2_List}{$Potatso3_List}{$Potatso4_List}{$Potatso5_List}{$Potatso6_List}{$Potatso7_List}":false;
    $Group<'7'?$Potatso_List ="{$Potatso1_List}{$Potatso2_List}{$Potatso3_List}{$Potatso4_List}{$Potatso5_List}{$Potatso6_List}":false;
    $Group<'6'?$Potatso_List ="{$Potatso1_List}{$Potatso2_List}{$Potatso3_List}{$Potatso4_List}{$Potatso5_List}":false;
    $Group<'5'?$Potatso_List ="{$Potatso1_List}{$Potatso2_List}{$Potatso3_List}{$Potatso4_List}":false;
    $Group<'4'?$Potatso_List ="{$Potatso1_List}{$Potatso2_List}{$Potatso3_List}":false;
    $Group<'3'?$Potatso_List ="{$Potatso1_List}{$Potatso2_List}":false;
    $Group<'2'?$Potatso_List ="{$Potatso1_List}":false;
}

# RegExp Replace
function Replace($Replace=false,$Surge=false,$Shadowrocket=false,$Potatso=false,$ABIGT=false,$Wingy=false)
{
    if($Surge===true)
    {
        global $Surge_Default,$Surge_Advanced,$Surge_Basic;
        global $Surge_DIRECT,$Surge_REJECT,$Surge_KEYWORD;
        global $Surge_IPCIDR,$Surge_Rewrite,$Surge_Other;
        $Surge_Default         = preg_replace('/([^])([ \s]+)/','$1,DIRECT$2',$Replace."\r\n");
        $Surge_Advanced        = preg_replace('/([^])([ \s]+)/','$1,Proxy$2',$Replace);
        $Surge_Basic           = preg_replace('/([^])([ \s]+)/','$1,Proxy$2',$Replace);
        $Surge_DIRECT          = preg_replace('/([^])([ \s]+)/','$1,DIRECT$2',$Replace);
        $Surge_REJECT          = preg_replace('/([^])([ \s]+)/','$1,REJECT$2',$Replace);
        $Surge_KEYWORD         = preg_replace('/([^])([ \s]+)/','DOMAIN-KEYWORD,$1$2,force-remote-dns',$Replace);
        $Surge_IPCIDR          = preg_replace('/([^])([ \s]+)/','IP-CIDR,$1$2,no-resolve',$Replace);
        $Surge_Rewrite         = preg_replace('/([^])([ \s]+)/','$1$2',$Replace);
        $Surge_Other           = preg_replace('/([^])([ \s]+)/','$1$2',$Replace."\r\n");
    }
    elseif($Shadowrocket===true)
    {
        global $Shadowrocket_Default,$Shadowrocket_Advanced,$Shadowrocket_Basic;
        global $Shadowrocket_DIRECT,$Shadowrocket_REJECT,$Shadowrocket_KEYWORD;
        global $Shadowrocket_IPCIDR,$Shadowrocket_Rewrite,$Shadowrocket_Other;
        $Shadowrocket_Default  = preg_replace('/([^])([ \s]+)/','$1,DIRECT$2',$Replace."\r\n");
        $Shadowrocket_Advanced = preg_replace('/([^])([ \s]+)/','$1,Proxy$2',$Replace);
        $Shadowrocket_Basic    = preg_replace('/([^])([ \s]+)/','$1,Proxy$2',$Replace);
        $Shadowrocket_DIRECT   = preg_replace('/([^])([ \s]+)/','$1,DIRECT$2',$Replace);
        $Shadowrocket_REJECT   = preg_replace('/([^])([ \s]+)/','$1,REJECT$2',$Replace);
        $Shadowrocket_KEYWORD  = preg_replace('/([^])([ \s]+)/','DOMAIN-KEYWORD,$1$2,force-remote-dns',$Replace);
        $Shadowrocket_IPCIDR   = preg_replace('/([^])([ \s]+)/','IP-CIDR,$1$2,no-resolve',$Replace);
        $Shadowrocket_Rewrite  = preg_replace('/([^])([ \s]+)/','$1$2',$Replace);
        $Shadowrocket_Other    = preg_replace('/([^])([ \s]+)/','$1$2',$Replace."\r\n");
    }
    elseif($Potatso===true)
    {
        global $Potatso_Default,$Potatso_Advanced;
        global $Potatso_Basic,$Potatso_DIRECT,$Potatso_REJECT;
        global $Potatso_KEYWORD,$Potatso_IPCIDR,$Potatso_Other;
        $Potatso_Default       = preg_replace('/([^])([ \s]+)/','  - $1,DIRECT$2',$Replace."\r\n");
        $Potatso_Advanced      = preg_replace('/([^])([ \s]+)/','  - $1,Proxy$2',$Replace);
        $Potatso_Basic         = preg_replace('/([^])([ \s]+)/','$1,Proxy$2',$Replace);
        $Potatso_DIRECT        = preg_replace('/([^])([ \s]+)/','  - $1,DIRECT$2',$Replace);
        $Potatso_REJECT        = preg_replace('/([^])([ \s]+)/','  - $1,REJECT$2',$Replace);
        $Potatso_KEYWORD       = preg_replace('/([^])([ \s]+)/','  - DOMAIN-MATCH,$1$2',$Replace);
        $Potatso_IPCIDR        = preg_replace('/([^])([ \s]+)/','  - IP-CIDR,$1$2',$Replace);
        $Potatso_OtherA        = preg_replace('/([^])([ \s]+)/','  - $1$2',$Replace);
        $Potatso_Other         = preg_replace('/(  - FINAL,Proxy)/','',$Potatso_OtherA);
    }
    elseif($ABIGT===true)
    {
        global $ABIGT_Default,$ABIGT_Advanced,$ABIGT_Basic;
        global $ABIGT_DIRECT,$ABIGT_REJECT,$ABIGT_KEYWORD;
        global $ABIGT_IPCIDR,$ABIGT_Rewrite,$ABIGT_Other,$ABIGT_USERAGENT;
        $ABIGT_Default         = preg_replace('/([^])([ \s]+)/','$1,DIRECT$2',$Replace."\r\n");
        $ABIGT_Advanced        = preg_replace('/([^])([ \s]+)/','$1,Proxy$2',$Replace);
        $ABIGT_Basic           = preg_replace('/([^])([ \s]+)/','$1,Proxy$2',$Replace);
        $ABIGT_DIRECT          = preg_replace('/([^])([ \s]+)/','$1,DIRECT$2',$Replace);
        $ABIGT_REJECT          = preg_replace('/([^])([ \s]+)/','$1,REJECT$2',$Replace);
        $ABIGT_KEYWORD         = preg_replace('/([^])([ \s]+)/','DOMAIN-KEYWORD,$1$2,force-remote-dns',$Replace);
        $ABIGT_IPCIDR          = preg_replace('/([^])([ \s]+)/','IP-CIDR,$1$2,no-resolve',$Replace);
        $ABIGT_Rewrite         = preg_replace('/([^])([ \s]+)/','$1$2',$Replace);
        $ABIGT_Other           = preg_replace('/([^])([ \s]+)/','$1$2',$Replace."\r\n");
        $ABIGT_USERAGENT       = preg_replace('/([^])([ \s]+)/','$1$2',$Replace."\r\n");
    }
    elseif($Wingy===true)
    {
        global $Wingy_Default,$Wingy_Advanced,$Wingy_Basic,$Wingy_DIRECT;
        global $Wingy_REJECT,$Wingy_KEYWORD_DIRECT,$Wingy_KEYWORD_REJECT,$Wingy_KEYWORD_Proxy;
        global $Wingy_IPCIDR_DIRECT,$Wingy_IPCIDR_REJECT,$Wingy_IPCIDR_Proxy;
        $Wingy_Default         = preg_replace('/(DOMAIN-SUFFIX,)/','      - s,',$Replace);
        $Wingy_AdvancedA       = preg_replace('/(DOMAIN-SUFFIX,)/','      - s,',$Replace);
        $Wingy_Advanced        = preg_replace('/(DOMAIN,)/','      - c,',$Wingy_AdvancedA);
        $Wingy_BasicA          = preg_replace('/(DOMAIN-SUFFIX,)/','      - s,',$Replace);
        $Wingy_Basic           = preg_replace('/(DOMAIN,)/','      - s,',$Wingy_BasicA);
        $Wingy_REJECTA         = preg_replace('/(DOMAIN,)/','      - c,',$Replace);
        $Wingy_REJECT          = preg_replace('/(DOMAIN-SUFFIX,)/','      - s,',$Wingy_REJECTA);
        $Wingy_DIRECTA         = preg_replace('/(DOMAIN,)/','      - c,',$Replace);
        $Wingy_DIRECT          = preg_replace('/(DOMAIN-SUFFIX,)/','      - s,',$Wingy_DIRECTA);
        $Wingy_KEYWORD_ProxyA  = preg_replace('/(,DIRECT)([ \s]+)/','-DIRECT--DIRECT$2',$Replace);
        $Wingy_KEYWORD_ProxyB  = preg_replace('/(,REJECT)([ \s]+)/','-REJECT--REJECT$2',$Wingy_KEYWORD_ProxyA);
        $Wingy_KEYWORD_ProxyC  = preg_replace('/(\w+\-\w+\--\w+)([ \s]+)/','',$Wingy_KEYWORD_ProxyB);
        $Wingy_KEYWORD_ProxyD  = preg_replace('/(,Proxy)([ \s]+)/','$2',$Wingy_KEYWORD_ProxyC);
        $Wingy_KEYWORD_Proxy   = preg_replace('/([^])([ \s]+)/','      - k,$1$2',$Wingy_KEYWORD_ProxyD);
        $Wingy_KEYWORD_DIRECTA = preg_replace('/(,Proxy)([ \s]+)/','-Proxy--Proxy$2',$Replace);
        $Wingy_KEYWORD_DIRECTB = preg_replace('/(,REJECT)([ \s]+)/','-REJECT--REJECT$2',$Wingy_KEYWORD_DIRECTA);
        $Wingy_KEYWORD_DIRECTC = preg_replace('/(\w+\-\w+\--\w+)([ \s]+)/','',$Wingy_KEYWORD_DIRECTB);
        $Wingy_KEYWORD_DIRECTD = preg_replace('/(,DIRECT)([ \s]+)/','$2',$Wingy_KEYWORD_DIRECTC);
        $Wingy_KEYWORD_DIRECT  = preg_replace('/([^])([ \s]+)/','      - k,$1$2',$Wingy_KEYWORD_DIRECTD);
        $Wingy_KEYWORD_REJECTA = preg_replace('/(,Proxy)([ \s]+)/','-Proxy--Proxy$2',$Replace);
        $Wingy_KEYWORD_REJECTB = preg_replace('/(,DIRECT)([ \s]+)/','-DIRECT--DIRECT$2',$Wingy_KEYWORD_REJECTA);
        $Wingy_KEYWORD_REJECTC = preg_replace('/(\w+\-\w+\--\w+)([ \s]+)/','',$Wingy_KEYWORD_REJECTB);
        $Wingy_KEYWORD_REJECTD = preg_replace('/(,REJECT)([ \s]+)/','$2',$Wingy_KEYWORD_REJECTC);
        $Wingy_KEYWORD_REJECT  = preg_replace('/([^])([ \s]+)/','      - k,$1$2',$Wingy_KEYWORD_REJECTD);
        $Wingy_IPCIDR_ProxyA   = preg_replace('/(,DIRECT)([ \s]+)/','-DIRECT--DIRECT$2',$Replace)."\r\n";
        $Wingy_IPCIDR_ProxyB   = preg_replace('/(,REJECT)([ \s]+)/','-REJECT--REJECT$2',$Wingy_IPCIDR_ProxyA);
        $Wingy_IPCIDR_ProxyC   = preg_replace('/(\d+\.\d+\.\d+\.\d+\/\d+\-\w+\--\w+)([ \s]+)/','',$Wingy_IPCIDR_ProxyB);
        $Wingy_IPCIDR_ProxyD   = preg_replace('/(,Proxy)([ \s]+)/','$2',$Wingy_IPCIDR_ProxyC);
        $Wingy_IPCIDR_Proxy    = preg_replace('/([^])([ \s]+)/','      - $1$2',$Wingy_IPCIDR_ProxyD);
        $Wingy_IPCIDR_DIRECTA  = preg_replace('/(,Proxy)([ \s]+)/','-Proxy--Proxy$2',$Replace)."\r\n";
        $Wingy_IPCIDR_DIRECTB  = preg_replace('/(,REJECT)([ \s]+)/','-REJECT--REJECT$2',$Wingy_IPCIDR_DIRECTA);
        $Wingy_IPCIDR_DIRECTC  = preg_replace('/(\d+\.\d+\.\d+\.\d+\/\d+\-\w+\--\w+)([ \s]+)/','',$Wingy_IPCIDR_DIRECTB);
        $Wingy_IPCIDR_DIRECTD  = preg_replace('/(,DIRECT)([ \s]+)/','$2',$Wingy_IPCIDR_DIRECTC);
        $Wingy_IPCIDR_DIRECT   = preg_replace('/([^])([ \s]+)/','      - $1$2',$Wingy_IPCIDR_DIRECTD);
        $Wingy_IPCIDR_REJECTA  = preg_replace('/(,Proxy)([ \s]+)/','-Proxy--Proxy$2',$Replace);
        $Wingy_IPCIDR_REJECTB  = preg_replace('/(,DIRECT)([ \s]+)/','-DIRECT--DIRECT$2',$Wingy_IPCIDR_REJECTA);
        $Wingy_IPCIDR_REJECTC  = preg_replace('/(\d+\.\d+\.\d+\.\d+\/\d+\-\w+\--\w+)([ \s]+)/','',$Wingy_IPCIDR_REJECTB);
        $Wingy_IPCIDR_REJECTD  = preg_replace('/(,REJECT)([ \s]+)/','$2',$Wingy_IPCIDR_REJECTC);
        $Wingy_IPCIDR_REJECT   = preg_replace('/([^])([ \s]+)/','      - $1$2',$Wingy_IPCIDR_REJECTD);
    }
}

# Hosts Replace
function Hosts_Replace($Replace=false,$Hosts=false,$HostsFix=false)
{
    if($Hosts===true)
    {
        global $Hosts_Format_Replace,$Hosts_KEYWORD,$Hosts_IPCIDR;
        global $Hosts_Other,$Hosts_YouTube,$Hosts_REJECT,$Hosts_Rewrite;
        $Hosts_Format_ReplaceA = preg_replace('/(\d+\.\d+\.\d+\.\d+)([ \t]+)([a-z0-9_\-\/.%]+)/', '$3 = $1', $Replace);
        $Hosts_Format_Replace  = preg_replace('/(::)/', '# ::', $Hosts_Format_ReplaceA);
        $Hosts_KEYWORDA        = preg_replace('/([^])([ \s]+)/', 'DOMAIN-KEYWORD,$1$2,force-remote-dns', $Replace);
        $Hosts_KEYWORD         = preg_replace('/(Proxy)/', 'DIRECT', $Hosts_KEYWORDA);
        $Hosts_IPCIDRA         = preg_replace('/([^])([ \s]+)/', 'IP-CIDR,$1$2,no-resolve', $Replace);
        $Hosts_IPCIDR          = preg_replace('/(Proxy)/', 'DIRECT', $Hosts_IPCIDRA);
        $Hosts_OtherA          = preg_replace('/([^])([ \s]+)/', '$1$2', $Replace . "\r\n");
        $Hosts_Other           = preg_replace('/(Proxy)/', 'DIRECT', $Hosts_OtherA);
        $Hosts_REJECT          = preg_replace('/([^])([ \s]+)/','$1,REJECT$2',$Replace);
        $Hosts_YouTube         = preg_replace('/(.com)/', ".com = {$HostsFix}", $Replace . "\r\n");
        $Hosts_Rewrite         = preg_replace('/([^])([ \s]+)/','$1$2',$Replace);
    }
}

# Advanced Replace
function Advanced($Replace,$AutoGroup,$Apple){
    global $Default,$Proxy,$DIRECT,$REJECT,$KEYWORD,$IPCIDR,$Rewrite,$Other;
    global $Potatso_Default,$Potatso_Proxy,$Potatso_DIRECT,$Potatso_REJECT;
    global $Potatso_KEYWORD,$Potatso_IPCIDR,$Potatso_Other;
    if($AutoGroup==='true'&&$Apple==='true'){
        $Advanced_Proxy   = 'AutoGroup';$Advanced_KEYWORD = 'AutoGroup';
        $Advanced_IPCIDR  = 'AutoGroup';$Advanced_Other   = 'AutoGroup';
        $Advanced_Default = 'AutoGroup';
    }
    elseif($AutoGroup==='false'&&$Apple==='false'){
        $Advanced_Proxy   = 'Proxy';$Advanced_KEYWORD = 'Proxy';
        $Advanced_IPCIDR  = 'Proxy';$Advanced_Other   = 'Proxy';
        $Advanced_Default = 'DIRECT';
    }
    elseif($AutoGroup==='true'&&$Apple==='false'){
        $Advanced_Proxy   = 'AutoGroup';$Advanced_KEYWORD = 'AutoGroup';
        $Advanced_IPCIDR  = 'AutoGroup';$Advanced_Other   = 'AutoGroup';
        $Advanced_Default = 'DIRECT';
    }
    elseif($AutoGroup==='false'&&$Apple==='true'){
        $Advanced_Proxy   = 'Proxy';$Advanced_KEYWORD = 'Proxy';
        $Advanced_IPCIDR  = 'Proxy';$Advanced_Other   = 'Proxy';
        $Advanced_Default = 'Proxy';
    }
    elseif($AutoGroup==='select'&&$Apple==='true'){
        $Advanced_Proxy   = 'Auto';$Advanced_KEYWORD = 'Auto';
        $Advanced_IPCIDR  = 'Auto';$Advanced_Other   = 'Auto';
        $Advanced_Default = 'Auto';
    }
    elseif($AutoGroup==='select'&&$Apple==='false'){
        $Advanced_Proxy   = 'Auto';$Advanced_KEYWORD = 'Auto';
        $Advanced_IPCIDR  = 'Auto';$Advanced_Other   = 'Auto';
        $Advanced_Default = 'DIRECT';
    }
    else{
        $Advanced_Proxy   = 'Proxy';$Advanced_KEYWORD = 'Proxy';
        $Advanced_IPCIDR  = 'Proxy';$Advanced_Other   = 'Proxy';
        $Advanced_Default = 'DIRECT';
    }
    $Default  = preg_replace('/([^])([ \s]+)/',"$1,{$Advanced_Default}$2",$Replace."\r\n");
    $Proxy    = preg_replace('/([^])([ \s]+)/',"$1,{$Advanced_Proxy}$2",$Replace);
    $DIRECT   = preg_replace('/([^])([ \s]+)/','$1,DIRECT$2',$Replace);
    $REJECT   = preg_replace('/([^])([ \s]+)/','$1,REJECT$2',$Replace);
    $KEYWORDA = preg_replace('/([^])([ \s]+)/','DOMAIN-KEYWORD,$1$2,force-remote-dns',$Replace);
    $KEYWORD  = preg_replace('/(Proxy)/',"{$Advanced_KEYWORD}",$KEYWORDA);
    $IPCIDRA  = preg_replace('/([^])([ \s]+)/','IP-CIDR,$1$2,no-resolve',$Replace);
    $IPCIDR   = preg_replace('/(Proxy)/',"{$Advanced_IPCIDR}",$IPCIDRA);
    $Rewrite  = preg_replace('/([^])([ \s]+)/','$1$2',$Replace);
    $OtherA   = preg_replace('/([^])([ \s]+)/','$1$2',$Replace);
    $Other    = preg_replace('/(Proxy)/',"{$Advanced_Other}",$OtherA."\r\n");
    $Potatso_Default = preg_replace('/([^])([ \s]+)/',"  - $1,{$Advanced_Default}$2",$Replace."\r\n");
    $Potatso_Proxy   = preg_replace('/([^])([ \s]+)/',"  - $1,{$Advanced_Proxy}$2",$Replace);
    $Potatso_DIRECT  = preg_replace('/([^])([ \s]+)/','  - $1,DIRECT$2',$Replace);
    $Potatso_REJECT  = preg_replace('/([^])([ \s]+)/','  - $1,REJECT$2',$Replace);
    $Potatso_KEYWORD = preg_replace('/([^])([ \s]+)/','  - DOMAIN-MATCH,$1$2',$Replace);
    $Potatso_IPCIDR  = preg_replace('/([^])([ \s]+)/','  - IP-CIDR,$1$2',$Replace);
    $Potatso_OtherA  = preg_replace('/([^])([ \s]+)/','  - $1$2',$Replace);
    $Potatso_Other   = preg_replace('/(  - FINAL,Proxy)/','',$Potatso_OtherA);
}

?>