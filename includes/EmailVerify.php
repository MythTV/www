<?php
/**
 * The EmailVerify class
 *
 * @url         $URL$
 * @date        $Date$
 * @version     $Revision$
 * @author      $Author$
 * @license     LGPL
 * @copyright   Silicon Mechanics
 *
/**/

/**
 * An email verification class, taken from perl's Email::Verify and Net::TLD
 * modules.  This should perform identically to the aforementioned modules.
/**/
class EmailVerify {

/* ****************************************************************************
 * Static variables/functions below
/******************************************************************************/

/**
 * @var string  Regular expression built using Jeffrey Friedl's example in
 *              _Mastering Regular Expressions_
 *              {@link http://www.oreilly.com/catalog/regex}.
/**/
    public static function RFC822_pattern() {
        return preg_replace('/\\s+/', '', '
        [\040\t]*(?:\([^\\\x80-\xff\n\015()]*(?:(?:\\[^\x80-\xff]|\([^\\\x80-\
        xff\n\015()]*(?:\\[^\x80-\xff][^\\\x80-\xff\n\015()]*)*\))[^\\\x80-\xf
        f\n\015()]*)*\)[\040\t]*)*(?:(?:[^(\040)<>@,;:".\\\[\]\000-\037\x80-\x
        ff]+(?![^(\040)<>@,;:".\\\[\]\000-\037\x80-\xff])|"[^\\\x80-\xff\n\015
        "]*(?:\\[^\x80-\xff][^\\\x80-\xff\n\015"]*)*")[\040\t]*(?:\([^\\\x80-\
        xff\n\015()]*(?:(?:\\[^\x80-\xff]|\([^\\\x80-\xff\n\015()]*(?:\\[^\x80
        -\xff][^\\\x80-\xff\n\015()]*)*\))[^\\\x80-\xff\n\015()]*)*\)[\040\t]*
        )*(?:\.[\040\t]*(?:\([^\\\x80-\xff\n\015()]*(?:(?:\\[^\x80-\xff]|\([^\
        \\x80-\xff\n\015()]*(?:\\[^\x80-\xff][^\\\x80-\xff\n\015()]*)*\))[^\\\
        x80-\xff\n\015()]*)*\)[\040\t]*)*(?:[^(\040)<>@,;:".\\\[\]\000-\037\x8
        0-\xff]+(?![^(\040)<>@,;:".\\\[\]\000-\037\x80-\xff])|"[^\\\x80-\xff\n
        \015"]*(?:\\[^\x80-\xff][^\\\x80-\xff\n\015"]*)*")[\040\t]*(?:\([^\\\x
        80-\xff\n\015()]*(?:(?:\\[^\x80-\xff]|\([^\\\x80-\xff\n\015()]*(?:\\[^
        \x80-\xff][^\\\x80-\xff\n\015()]*)*\))[^\\\x80-\xff\n\015()]*)*\)[\040
        \t]*)*)*@[\040\t]*(?:\([^\\\x80-\xff\n\015()]*(?:(?:\\[^\x80-\xff]|\([
        ^\\\x80-\xff\n\015()]*(?:\\[^\x80-\xff][^\\\x80-\xff\n\015()]*)*\))[^\
        \\x80-\xff\n\015()]*)*\)[\040\t]*)*(?:[^(\040)<>@,;:".\\\[\]\000-\037\
        x80-\xff]+(?![^(\040)<>@,;:".\\\[\]\000-\037\x80-\xff])|\[(?:[^\\\x80-
        \xff\n\015\[\]]|\\[^\x80-\xff])*\])[\040\t]*(?:\([^\\\x80-\xff\n\015()
        ]*(?:(?:\\[^\x80-\xff]|\([^\\\x80-\xff\n\015()]*(?:\\[^\x80-\xff][^\\\
        x80-\xff\n\015()]*)*\))[^\\\x80-\xff\n\015()]*)*\)[\040\t]*)*(?:\.[\04
        0\t]*(?:\([^\\\x80-\xff\n\015()]*(?:(?:\\[^\x80-\xff]|\([^\\\x80-\xff\
        n\015()]*(?:\\[^\x80-\xff][^\\\x80-\xff\n\015()]*)*\))[^\\\x80-\xff\n\
        015()]*)*\)[\040\t]*)*(?:[^(\040)<>@,;:".\\\[\]\000-\037\x80-\xff]+(?!
        [^(\040)<>@,;:".\\\[\]\000-\037\x80-\xff])|\[(?:[^\\\x80-\xff\n\015\[\
        ]]|\\[^\x80-\xff])*\])[\040\t]*(?:\([^\\\x80-\xff\n\015()]*(?:(?:\\[^\
        x80-\xff]|\([^\\\x80-\xff\n\015()]*(?:\\[^\x80-\xff][^\\\x80-\xff\n\01
        5()]*)*\))[^\\\x80-\xff\n\015()]*)*\)[\040\t]*)*)*|(?:[^(\040)<>@,;:".
        \\\[\]\000-\037\x80-\xff]+(?![^(\040)<>@,;:".\\\[\]\000-\037\x80-\xff]
        )|"[^\\\x80-\xff\n\015"]*(?:\\[^\x80-\xff][^\\\x80-\xff\n\015"]*)*")[^
        ()<>@,;:".\\\[\]\x80-\xff\000-\010\012-\037]*(?:(?:\([^\\\x80-\xff\n\0
        15()]*(?:(?:\\[^\x80-\xff]|\([^\\\x80-\xff\n\015()]*(?:\\[^\x80-\xff][
        ^\\\x80-\xff\n\015()]*)*\))[^\\\x80-\xff\n\015()]*)*\)|"[^\\\x80-\xff\
        n\015"]*(?:\\[^\x80-\xff][^\\\x80-\xff\n\015"]*)*")[^()<>@,;:".\\\[\]\
        x80-\xff\000-\010\012-\037]*)*<[\040\t]*(?:\([^\\\x80-\xff\n\015()]*(?
        :(?:\\[^\x80-\xff]|\([^\\\x80-\xff\n\015()]*(?:\\[^\x80-\xff][^\\\x80-
        \xff\n\015()]*)*\))[^\\\x80-\xff\n\015()]*)*\)[\040\t]*)*(?:@[\040\t]*
        (?:\([^\\\x80-\xff\n\015()]*(?:(?:\\[^\x80-\xff]|\([^\\\x80-\xff\n\015
        ()]*(?:\\[^\x80-\xff][^\\\x80-\xff\n\015()]*)*\))[^\\\x80-\xff\n\015()
        ]*)*\)[\040\t]*)*(?:[^(\040)<>@,;:".\\\[\]\000-\037\x80-\xff]+(?![^(\0
        40)<>@,;:".\\\[\]\000-\037\x80-\xff])|\[(?:[^\\\x80-\xff\n\015\[\]]|\\
        [^\x80-\xff])*\])[\040\t]*(?:\([^\\\x80-\xff\n\015()]*(?:(?:\\[^\x80-\
        xff]|\([^\\\x80-\xff\n\015()]*(?:\\[^\x80-\xff][^\\\x80-\xff\n\015()]*
        )*\))[^\\\x80-\xff\n\015()]*)*\)[\040\t]*)*(?:\.[\040\t]*(?:\([^\\\x80
        -\xff\n\015()]*(?:(?:\\[^\x80-\xff]|\([^\\\x80-\xff\n\015()]*(?:\\[^\x
        80-\xff][^\\\x80-\xff\n\015()]*)*\))[^\\\x80-\xff\n\015()]*)*\)[\040\t
        ]*)*(?:[^(\040)<>@,;:".\\\[\]\000-\037\x80-\xff]+(?![^(\040)<>@,;:".\\
        \[\]\000-\037\x80-\xff])|\[(?:[^\\\x80-\xff\n\015\[\]]|\\[^\x80-\xff])
        *\])[\040\t]*(?:\([^\\\x80-\xff\n\015()]*(?:(?:\\[^\x80-\xff]|\([^\\\x
        80-\xff\n\015()]*(?:\\[^\x80-\xff][^\\\x80-\xff\n\015()]*)*\))[^\\\x80
        -\xff\n\015()]*)*\)[\040\t]*)*)*(?:,[\040\t]*(?:\([^\\\x80-\xff\n\015(
        )]*(?:(?:\\[^\x80-\xff]|\([^\\\x80-\xff\n\015()]*(?:\\[^\x80-\xff][^\\
        \x80-\xff\n\015()]*)*\))[^\\\x80-\xff\n\015()]*)*\)[\040\t]*)*@[\040\t
        ]*(?:\([^\\\x80-\xff\n\015()]*(?:(?:\\[^\x80-\xff]|\([^\\\x80-\xff\n\0
        15()]*(?:\\[^\x80-\xff][^\\\x80-\xff\n\015()]*)*\))[^\\\x80-\xff\n\015
        ()]*)*\)[\040\t]*)*(?:[^(\040)<>@,;:".\\\[\]\000-\037\x80-\xff]+(?![^(
        \040)<>@,;:".\\\[\]\000-\037\x80-\xff])|\[(?:[^\\\x80-\xff\n\015\[\]]|
        \\[^\x80-\xff])*\])[\040\t]*(?:\([^\\\x80-\xff\n\015()]*(?:(?:\\[^\x80
        -\xff]|\([^\\\x80-\xff\n\015()]*(?:\\[^\x80-\xff][^\\\x80-\xff\n\015()
        ]*)*\))[^\\\x80-\xff\n\015()]*)*\)[\040\t]*)*(?:\.[\040\t]*(?:\([^\\\x
        80-\xff\n\015()]*(?:(?:\\[^\x80-\xff]|\([^\\\x80-\xff\n\015()]*(?:\\[^
        \x80-\xff][^\\\x80-\xff\n\015()]*)*\))[^\\\x80-\xff\n\015()]*)*\)[\040
        \t]*)*(?:[^(\040)<>@,;:".\\\[\]\000-\037\x80-\xff]+(?![^(\040)<>@,;:".
        \\\[\]\000-\037\x80-\xff])|\[(?:[^\\\x80-\xff\n\015\[\]]|\\[^\x80-\xff
        ])*\])[\040\t]*(?:\([^\\\x80-\xff\n\015()]*(?:(?:\\[^\x80-\xff]|\([^\\
        \x80-\xff\n\015()]*(?:\\[^\x80-\xff][^\\\x80-\xff\n\015()]*)*\))[^\\\x
        80-\xff\n\015()]*)*\)[\040\t]*)*)*)*:[\040\t]*(?:\([^\\\x80-\xff\n\015
        ()]*(?:(?:\\[^\x80-\xff]|\([^\\\x80-\xff\n\015()]*(?:\\[^\x80-\xff][^\
        \\x80-\xff\n\015()]*)*\))[^\\\x80-\xff\n\015()]*)*\)[\040\t]*)*)?(?:[^
        (\040)<>@,;:".\\\[\]\000-\037\x80-\xff]+(?![^(\040)<>@,;:".\\\[\]\000-
        \037\x80-\xff])|"[^\\\x80-\xff\n\015"]*(?:\\[^\x80-\xff][^\\\x80-\xff\
        n\015"]*)*")[\040\t]*(?:\([^\\\x80-\xff\n\015()]*(?:(?:\\[^\x80-\xff]|
        \([^\\\x80-\xff\n\015()]*(?:\\[^\x80-\xff][^\\\x80-\xff\n\015()]*)*\))
        [^\\\x80-\xff\n\015()]*)*\)[\040\t]*)*(?:\.[\040\t]*(?:\([^\\\x80-\xff
        \n\015()]*(?:(?:\\[^\x80-\xff]|\([^\\\x80-\xff\n\015()]*(?:\\[^\x80-\x
        ff][^\\\x80-\xff\n\015()]*)*\))[^\\\x80-\xff\n\015()]*)*\)[\040\t]*)*(
        ?:[^(\040)<>@,;:".\\\[\]\000-\037\x80-\xff]+(?![^(\040)<>@,;:".\\\[\]\
        000-\037\x80-\xff])|"[^\\\x80-\xff\n\015"]*(?:\\[^\x80-\xff][^\\\x80-\
        xff\n\015"]*)*")[\040\t]*(?:\([^\\\x80-\xff\n\015()]*(?:(?:\\[^\x80-\x
        ff]|\([^\\\x80-\xff\n\015()]*(?:\\[^\x80-\xff][^\\\x80-\xff\n\015()]*)
        *\))[^\\\x80-\xff\n\015()]*)*\)[\040\t]*)*)*@[\040\t]*(?:\([^\\\x80-\x
        ff\n\015()]*(?:(?:\\[^\x80-\xff]|\([^\\\x80-\xff\n\015()]*(?:\\[^\x80-
        \xff][^\\\x80-\xff\n\015()]*)*\))[^\\\x80-\xff\n\015()]*)*\)[\040\t]*)
        *(?:[^(\040)<>@,;:".\\\[\]\000-\037\x80-\xff]+(?![^(\040)<>@,;:".\\\[\
        ]\000-\037\x80-\xff])|\[(?:[^\\\x80-\xff\n\015\[\]]|\\[^\x80-\xff])*\]
        )[\040\t]*(?:\([^\\\x80-\xff\n\015()]*(?:(?:\\[^\x80-\xff]|\([^\\\x80-
        \xff\n\015()]*(?:\\[^\x80-\xff][^\\\x80-\xff\n\015()]*)*\))[^\\\x80-\x
        ff\n\015()]*)*\)[\040\t]*)*(?:\.[\040\t]*(?:\([^\\\x80-\xff\n\015()]*(
        ?:(?:\\[^\x80-\xff]|\([^\\\x80-\xff\n\015()]*(?:\\[^\x80-\xff][^\\\x80
        -\xff\n\015()]*)*\))[^\\\x80-\xff\n\015()]*)*\)[\040\t]*)*(?:[^(\040)<
        >@,;:".\\\[\]\000-\037\x80-\xff]+(?![^(\040)<>@,;:".\\\[\]\000-\037\x8
        0-\xff])|\[(?:[^\\\x80-\xff\n\015\[\]]|\\[^\x80-\xff])*\])[\040\t]*(?:
        \([^\\\x80-\xff\n\015()]*(?:(?:\\[^\x80-\xff]|\([^\\\x80-\xff\n\015()]
        *(?:\\[^\x80-\xff][^\\\x80-\xff\n\015()]*)*\))[^\\\x80-\xff\n\015()]*)
        *\)[\040\t]*)*)*>)');
    }

/**
 * Single-function wrapper to this class, since most uses just want to check
 * if an email is valid or not.
 *
 * @param string $addr          Email address to verify
 * @param bool   $check_fqdn    Verifies that the email address contains a fully
 *                              qualified domain name, not just a subdomain host
 *                              name.
 * @param bool $check_tld       Verifies that the top level domain in the email
 *                              address actually exists.
 * @param bool $check_mx        Performs a lookup on the MX record for the email
 *                              address' host and then performs a standard DNS
 *                              lookup on any returned servers until it finds a
 *                              server that exists (same thing a mail server
 *                              would do).
 * @param bool $local_rules     Check some domain-specific (currently only AOL)
 *                              address formatting rules.
 * @param bool $fudge           Before processing, clean up address for common
 *                              mistakes in email addresses for aol and compuserve.
 *
 * @return bool
/**/
    public static function verify($addr, $check_fqdn=true, $check_tld=true, $check_mx=false, $local_rules=false, $fudge=false) {
        $verify = new EmailVerify($addr, $check_fqdn, $check_tld, $check_mx, $local_rules, $fudge);
        if($verify->verified) {
			return true;
		} else {
			EmailVerify::$last_err = $verify->err;
			return false;
		} // end if
    }

/* ****************************************************************************
 * Non-Static variables/functions below
/******************************************************************************/

    public $addr        = '';
    public $user        = '';
    public $host        = '';
    public $check_fqdn  = false;
    public $check_tld   = false;
    public $check_mx    = false;
    public $local_rules = false;
    public $verified    = true;
    public $err         = NULL;
	public static $last_err = NULL;


/**
 * Constructor.
 *
 * @param string $addr          Email address to verify
 * @param bool   $check_fqdn    Verifies that the email address contains a fully
 *                              qualified domain name, not just a subdomain host
 *                              name.
 * @param bool $check_tld       Verifies that the top level domain in the email
 *                              address actually exists.
 * @param bool $check_mx        Performs a lookup on the MX record for the email
 *                              address' host and then performs a standard DNS
 *                              lookup on any returned servers until it finds a
 *                              server that exists (same thing a mail server
 *                              would do).
 * @param bool $local_rules     Check some domain-specific (currently only AOL)
 *                              address formatting rules.
 * @param bool $fudge           Before processing, clean up address for common
 *                              mistakes in email addresses for aol and compuserve.
/**/
    public function __construct($addr, $check_fqdn=true, $check_tld=true, $check_mx=false, $local_rules=false, $fudge=false) {
    // Do we want to allow certain address fudges?
        if ($fudge) {
            if (preg_match('/(^|\\.)aol\.com$/i', $addr))
                $addr = preg_replace('/\\s+/', '', $addr);
            elseif (preg_match('/(^|\\.)compuserve\.com$/i', $addr))
                $addr = str_replace(',', '.', $addr);
        }
    // Load the requested settings
        $this->addr        = $addr;
        $this->check_fqdn  = $check_fqdn;
        $this->check_tld   = $check_tld;
        $this->check_mx    = $check_mx;
        $this->local_rules = $local_rules;
    // Split off the user and host portions
        preg_match('/^(.*)@([^@]*?)$/', $this->addr, $match);
        list($match, $this->user, $this->host) = $match;
    // Don't forget to remove brackets from an IP-based host
        $this->host = preg_replace('/^\[(\\d{1,3}(?:\\.\\d{1,3}){3})\]$/', '$1', $this->host);
    // Verify the address
        $this->_verify();
    }

/**
 * Sets the error message and returns false
 *
 * @param string $err   String to set the error message to.
 *
 * @return bool
/**/
    private function _err($err) {
        $this->verified = false;
        $this->err      = $err;
        return false;
    }

    private function _verify() {
    // Fully qualified domain name?
        if ($this->check_fqdn && !preg_match('/^.+\\..+$/', $this->host))
            return $this->_err('Email host is not a fully qualified domain name.');
    // Validate against RFC 822
        if (!preg_match('/^'.EmailVerify::RFC822_pattern().'$/x', $this->addr))
            return $this->_err('This address does not conform to the RFC 822 standard.');
    // Check for a valid TLD?
        if (!$this->_check_tld())
            return $this->_err('Email host is not from a valid top level domain.');
    // Does the mail server have a real DNS entry?
        if (!$this->_check_mx())
            return $this->_err('No valid mx record could be found for this address.');
    // Check handmade domain-specific rules (these set their own error messages
        if (!$this->_check_local_rules())
            return false;
    // All checks passed?
        return $this->verified = true;
    }

/**
 * Performs a DNS lookup to verify if $this->host has a valid MX record.
 *
 * @return bool
/**/
    function _check_mx() {
        if (!$this->check_mx)
            return true;
    // Find the MX hosts, if none are returned, follow RFC 2821 and use the
    // email address host itself.
        $hosts = array();
        if (!getmxrr($this->host, $hosts))
            $hosts[] = $this->host;
    // Check the found mx hosts until we find a valid domain
        foreach ($hosts as $host) {
            if (checkdnsrr($host, 'A'))
                return true;
        }
    // Nothing valid found, return false
        return false;
    }

/**
 * Perform checks for special address restrictions on a per-domain basis.
 * NOTE:  These organizations may change their rules at any time.
 *
 * @return bool
/**/
    function _check_local_rules() {
        if (!$this->local_rules)
            return true;
    // AOL addresses cannot:
    //     - Be shorter than 3 or longer than 16 characters
    //     - Begin with numbers
    //     - Contain periods, underscores, dashes or other punctuation characters
    // http://postmaster.info.aol.com/faq/mailerfaq.html
    // Last verified: May 6, 2004
        if (preg_match('/(^|\\.)aol\.com$/i', $this->host)) {
            if (!preg_match('/^[a-zA-Z][a-zA-Z0-9]{2,15}$/', $this->user))
                return $this->_err('Invalid AOL username.');
        }
    }

/**
 * Checks for a valid TLD.  The bulk of this function comes from
 * {@link http://search.cpan.org/src/ALEXP/Net-Domain-TLD-1.5/TLD.pm}
 *
 * @return bool
/**/
    function _check_tld() {
        if (!$this->check_tld)
            return true;
        static $TLDS = array(
                        // New TLDs
                        // Fetched from http://www.icann.org/tlds/
                             'aero'   => 'Air-transport industry',
                             'biz'    => 'Businesses',
                             'coop'   => 'Cooperatives',
                             'info'   => 'Unrestricted use',
                             'museum' => 'Museums',
                             'name'   => 'For registration by individuals',
                             'pro'    => 'Accountants, lawyers, and physicians',
                             'xxx'    => 'Adult Entertainment',
                        // Generic Open TLDs
                        // Fetched from http://www.dnso.org/constituency/gtld/gtld.html
                        // Specific defininitions from http://whatis.techtarget.com
                             'com' => 'Commercial organization',
                             'net' => 'Network connection services provider',
                             'org' => 'Non-profit organizations and industry standard groups',
                        // Generic Restricted TLDs (same source as above)
                             'gov' => 'United States Government',
                             'mil' => 'United States Military',
                             'edu' => 'Educational institution',
                             'int' => 'International treaties/databases',
                        // CC TLDs
                        // Fetched from http://www.iana.org/cctld/cctld-whois.htm
                             'ac' => 'Ascension Island',
                             'ad' => 'Andorra',
                             'ae' => 'United Arab Emirates',
                             'af' => 'Afghanistan',
                             'ag' => 'Antigua and Barbuda',
                             'ai' => 'Anguilla',
                             'al' => 'Albania',
                             'am' => 'Armenia',
                             'an' => 'Netherlands Antilles',
                             'ao' => 'Angola',
                             'aq' => 'Antartica',
                             'ar' => 'Argentina',
                             'as' => 'American Samoa',
                             'at' => 'Austria',
                             'au' => 'Australia',
                             'aw' => 'Aruba',
                             'az' => 'Azerbaijan',
                             'ba' => 'Bosnia and Herzegovina',
                             'bb' => 'Barbados',
                             'bd' => 'Bangladesh',
                             'be' => 'Belgium',
                             'bf' => 'Burkina Faso',
                             'bg' => 'Bulgaria',
                             'bh' => 'Bahrain',
                             'bi' => 'Burundi',
                             'bj' => 'Benin',
                             'bm' => 'Bermuda',
                             'bn' => 'Brunei Darussalam',
                             'bo' => 'Bolivia',
                             'br' => 'Brazil',
                             'bs' => 'Bahamas',
                             'bt' => 'Bhutan',
                             'bv' => 'Bouvet Island',
                             'bw' => 'Botswana',
                             'by' => 'Belarus',
                             'bz' => 'Belize',
                             'ca' => 'Canada',
                             'cc' => 'Cocos (Keeling) Islands',
                             'cd' => 'Congo, Democratic Republic of the',
                             'cf' => 'Central African Republic',
                             'cg' => 'Congo, Republic of',
                             'ch' => 'Switzerland',
                             'ci' => 'Cote d\'Ivoire',
                             'ck' => 'Cook Islands',
                             'cl' => 'Chile',
                             'cm' => 'Cameroon',
                             'cn' => 'China',
                             'co' => 'Colombia',
                             'cr' => 'Costa Rica',
                             'cu' => 'Cuba',
                             'cv' => 'Cap Verde',
                             'cx' => 'Christmas Island',
                             'cy' => 'Cyprus',
                             'cz' => 'Czech Republic',
                             'de' => 'Germany',
                             'dj' => 'Djibouti',
                             'dk' => 'Denmark',
                             'dm' => 'Dominica',
                             'do' => 'Dominican Republic',
                             'dz' => 'Algeria',
                             'ec' => 'Ecuador',
                             'ee' => 'Estonia',
                             'eg' => 'Egypt',
                             'eh' => 'Western Sahara',
                             'er' => 'Eritrea',
                             'es' => 'Spain',
                             'et' => 'Ethiopia',
							 'eu' => 'European Union',
                             'fi' => 'Finland',
                             'fj' => 'Fiji',
                             'fk' => 'Falkland Islands (Malvina)',
                             'fm' => 'Micronesia, Federal State of',
                             'fo' => 'Faroe Islands',
                             'fr' => 'France',
                             'ga' => 'Gabon',
                             'gd' => 'Grenada',
                             'ge' => 'Georgia',
                             'gf' => 'French Guiana',
                             'gg' => 'Guernsey',
                             'gh' => 'Ghana',
                             'gi' => 'Gibraltar',
                             'gl' => 'Greenland',
                             'gm' => 'Gambia',
                             'gn' => 'Guinea',
                             'gp' => 'Guadeloupe',
                             'gq' => 'Equatorial Guinea',
                             'gr' => 'Greece',
                             'gs' => 'South Georgia and the South Sandwich Islands',
                             'gt' => 'Guatemala',
                             'gu' => 'Guam',
                             'gw' => 'Guinea-Bissau',
                             'gy' => 'Guyana',
                             'hk' => 'Hong Kong',
                             'hm' => 'Heard and McDonald Islands',
                             'hn' => 'Honduras',
                             'hr' => 'Croatia/Hrvatska',
                             'ht' => 'Haiti',
                             'hu' => 'Hungary',
                             'id' => 'Indonesia',
                             'ie' => 'Ireland',
                             'il' => 'Israel',
                             'im' => 'Isle of Man',
                             'in' => 'India',
                             'io' => 'British Indian Ocean Territory',
                             'iq' => 'Iraq',
                             'ir' => 'Iran (Islamic Republic of)',
                             'is' => 'Iceland',
                             'it' => 'Italy',
                             'je' => 'Jersey',
                             'jm' => 'Jamaica',
                             'jo' => 'Jordan',
                             'jp' => 'Japan',
                             'ke' => 'Kenya',
                             'kg' => 'Kyrgyzstan',
                             'kh' => 'Cambodia',
                             'ki' => 'Kiribati',
                             'km' => 'Comoros',
                             'kn' => 'Saint Kitts and Nevis',
                             'kp' => 'Korea, Democratic People\'s Republic',
                             'kr' => 'Korea, Republic of',
                             'kw' => 'Kuwait',
                             'ky' => 'Cayman Islands',
                             'kz' => 'Kazakhstan',
                             'la' => 'Lao People\'s Democratic Republic',
                             'lb' => 'Lebanon',
                             'lc' => 'Saint Lucia',
                             'li' => 'Liechtenstein',
                             'lk' => 'Sri Lanka',
                             'lr' => 'Liberia',
                             'ls' => 'Lesotho',
                             'lt' => 'Lithuania',
                             'lu' => 'Luxembourg',
                             'lv' => 'Latvia',
                             'ly' => 'Libyan Arab Jamahiriya',
                             'ma' => 'Morocco',
                             'mc' => 'Monaco',
                             'md' => 'Moldova, Republic of',
                             'mg' => 'Madagascar',
                             'mh' => 'Marshall Islands',
                             'mk' => 'Macedonia, Former Yugoslav Republic',
                             'ml' => 'Mali',
                             'mm' => 'Myanmar',
                             'mn' => 'Mongolia',
                             'mo' => 'Macau',
                             'mp' => 'Northern Mariana Islands',
                             'mq' => 'Martinique',
                             'mr' => 'Mauritania',
                             'ms' => 'Montserrat',
                             'mt' => 'Malta',
                             'mu' => 'Mauritius',
                             'mv' => 'Maldives',
                             'mw' => 'Malawi',
                             'mx' => 'Mexico',
                             'my' => 'Malaysia',
                             'mz' => 'Mozambique',
                             'na' => 'Namibia',
                             'nc' => 'New Caledonia',
                             'ne' => 'Niger',
                             'nf' => 'Norfolk Island',
                             'ng' => 'Nigeria',
                             'ni' => 'Nicaragua',
                             'nl' => 'Netherlands',
                             'no' => 'Norway',
                             'np' => 'Nepal',
                             'nr' => 'Nauru',
                             'nu' => 'Niue',
                             'nz' => 'New Zealand',
                             'om' => 'Oman',
                             'pa' => 'Panama',
                             'pe' => 'Peru',
                             'pf' => 'French Polynesia',
                             'pg' => 'Papua New Guinea',
                             'ph' => 'Philippines',
                             'pk' => 'Pakistan',
                             'pl' => 'Poland',
                             'pm' => 'St. Pierre and Miquelon',
                             'pn' => 'Pitcairn Island',
                             'pr' => 'Puerto Rico',
                             'ps' => 'Palestinian Territories',
                             'pt' => 'Portugal',
                             'pw' => 'Palau',
                             'py' => 'Paraguay',
                             'qa' => 'Qatar',
                             're' => 'Reunion Island',
                             'ro' => 'Romania',
                             'ru' => 'Russian Federation',
                             'rw' => 'Rwanda',
                             'sa' => 'Saudi Arabia',
                             'sb' => 'Solomon Islands',
                             'sc' => 'Seychelles',
                             'sd' => 'Sudan',
                             'se' => 'Sweden',
                             'sg' => 'Singapore',
                             'sh' => 'St. Helena',
                             'si' => 'Slovenia',
                             'sj' => 'Svalbard and Jan Mayen Islands',
                             'sk' => 'Slovak Republic',
                             'sl' => 'Sierra Leone',
                             'sm' => 'San Marino',
                             'sn' => 'Senegal',
                             'so' => 'Somalia',
                             'sr' => 'Suriname',
                             'st' => 'Sao Tome and Principe',
                             'sv' => 'El Salvador',
                             'sy' => 'Syrian Arab Republic',
                             'sz' => 'Swaziland',
                             'tc' => 'Turks and Caicos Islands',
                             'td' => 'Chad',
                             'tf' => 'French Southern Territories',
                             'tg' => 'Togo',
                             'th' => 'Thailand',
                             'tj' => 'Tajikistan',
                             'tk' => 'Tokelau',
                             'tm' => 'Turkmenistan',
                             'tn' => 'Tunisia',
                             'to' => 'Tonga',
                             'tp' => 'East Timor',
                             'tr' => 'Turkey',
                             'tt' => 'Trinidad and Tobago',
                             'tv' => 'Tuvalu',
                             'tw' => 'Taiwan',
                             'tz' => 'Tanzania',
                             'ua' => 'Ukraine',
                             'ug' => 'Uganda',
                             'uk' => 'United Kingdom',
                             'um' => 'US Minor Outlying Islands',
                             'us' => 'United States',
                             'uy' => 'Uruguay',
                             'uz' => 'Uzbekistan',
                             'va' => 'Holy See (City Vatican State)',
                             'vc' => 'Saint Vincent and the Grenadines',
                             've' => 'Venezuela',
                             'vg' => 'Virgin Islands (British)',
                             'vi' => 'Virgin Islands (USA)',
                             'vn' => 'Vietnam',
                             'vu' => 'Vanuatu',
                             'wf' => 'Wallis and Futuna Islands',
                             'ws' => 'Western Samoa',
                             'ye' => 'Yemen',
                             'yt' => 'Mayotte',
                             'yu' => 'Yugoslavia',
                             'za' => 'South Africa',
                             'zm' => 'Zambia',
                             'zw' => 'Zimbabwe',
                            );
    // Now we pull the TLD off of the address
        preg_match('/\\.(\\w+)$/', $this->host, $tld);
        $tld = strtolower($tld[1]);
    // Does it exist?
        return $TLDS[$tld] ? $TLDS[$tld] : false;
    }

}
