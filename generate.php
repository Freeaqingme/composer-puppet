<?php

$repos = array(
    'enrise' => array(
        'git://github.com/Enrise/Puppet-zendserver.git',
        'git://github.com/Enrise/puppet-modules.git',
        'git://github.com/Enrise/Puppet-mariadb.git',
        'git://github.com/Enrise/puppet-nagios.git',
        'git://github.com/Enrise/puppet-php.git',
        'git://github.com/Enrise/puppet-iptables.git',
    ),
    'example42' => array(
        'git://github.com/example42/puppet-openvpn.git',
        'git://github.com/example42/puppet-iptables.git',
        'git://github.com/example42/puppet-php.git',
        'git://github.com/example42/puppet-ntp.git',
        'git://github.com/example42/puppet-puppetdashboard.git',
        'git://github.com/example42/puppet-modules-nextgen.git',
        'git://github.com/example42/puppet-sysctl.git',
        'git://github.com/example42/Example42-templates.git',
        'git://github.com/example42/puppet-user.git',
        'git://github.com/example42/puppet-apache.git',
        'git://github.com/example42/puppet-timezone.git',
        'git://github.com/example42/puppet-postgresql.git',
        'git://github.com/example42/Example42-tools.git',
        'git://github.com/example42/puppet-sysklogd.git',
        'git://github.com/example42/puppet-syslog-ng.git',
        'git://github.com/example42/puppet-mailx.git',
        'git://github.com/example42/puppet-zip.git',
        'git://github.com/example42/puppet-samba.git',
        'git://github.com/example42/puppet-logrotate.git',
        'git://github.com/example42/puppet-autofs.git',
        'git://github.com/example42/puppet-lsb.git',
        'git://github.com/example42/puppet-yum.git',
        'git://github.com/example42/puppi.git',
        'git://github.com/example42/puppet-puppet.git',
        'git://github.com/example42/puppet-nginx.git',
        'git://github.com/example42/puppet-logstash.git',
        'git://github.com/example42/puppet-mysql.git',
        'git://github.com/example42/puppet-activemq.git',
        'git://github.com/example42/puppet-mcollective.git',
        'git://github.com/example42/puppet-nfs.git',
        'git://github.com/example42/puppet-rhcs.git',
        'git://github.com/example42/puppet-munin.git',
        'git://github.com/example42/puppet-multipath.git',
        'git://github.com/example42/puppet-clvm.git',
        'git://github.com/example42/puppet-sudo.git',
        'git://github.com/example42/puppet-msmtp.git',
        'git://github.com/example42/puppet-tartarus.git',
        'git://github.com/example42/puppet-rclocal.git',
        'git://github.com/example42/puppet-java.git',
        'git://github.com/example42/puppet-monitor.git',
        'git://github.com/example42/puppet-vagrant.git',
        'git://github.com/example42/puppet-nagios.git',
        'git://github.com/example42/puppet-icinga.git',
        'git://github.com/example42/puppet-jboss.git',
        'git://github.com/example42/puppet-orientdb.git',
        'git://github.com/example42/puppet-apt.git',
        'git://github.com/example42/puppet-concat.git',
        'git://github.com/example42/puppet-django.git',
        'git://github.com/example42/puppet-dhcpd.git',
        'git://github.com/example42/puppet-firewall.git',
        'git://github.com/example42/puppet-dovecot.git',
        'git://github.com/example42/puppet-exim.git',
        'git://github.com/example42/puppet-foreman.git',
        'git://github.com/example42/puppet-freeradius.git',
        'git://github.com/example42/puppet-haproxy.git',
        'git://github.com/example42/puppet-rsyslog.git',
        'git://github.com/example42/puppet-rvm.git',
        'git://github.com/example42/puppet-scmserver.git',
        'git://github.com/example42/puppet-sendmail.git',
        'git://github.com/example42/puppet-snmpd.git',
        'git://github.com/example42/puppet-solr.git',
        'git://github.com/example42/puppet-splunk.git',
        'git://github.com/example42/puppet-tftp.git',
        'git://github.com/example42/puppet-tinc.git',
        'git://github.com/example42/puppet-tomcat.git',
        'git://github.com/example42/puppet-vim.git',
        'git://github.com/example42/puppet-vsftpd.git',
        'git://github.com/example42/puppet-wget.git',
        'git://github.com/example42/puppet-wordpress.git',
        'git://github.com/example42/puppet-xinetd.git',
        'git://github.com/example42/puppet-rsyncssh.git',
        'git://github.com/example42/puppet-resolver.git',
        'git://github.com/example42/puppet-rsync.git',
        'git://github.com/example42/puppet-redis.git',
        'git://github.com/example42/puppet-puppetdb.git',
        'git://github.com/example42/pupmod-concat.git',
        'git://github.com/example42/puppet-proftpd.git',
        'git://github.com/example42/puppet-postfix.git',
        'git://github.com/example42/puppet-pentaho.git',
        'git://github.com/example42/puppet-openssh.git',
        'git://github.com/example42/puppet-openntpd.git',
        'git://github.com/example42/puppet-nrpe.git',
        'git://github.com/example42/puppet-maven.git',
        'git://github.com/example42/puppet-lighttpd.git',
        'git://github.com/example42/puppet-libvirt.git',
        'git://github.com/example42/puppet-jenkins.git',
        'git://github.com/example42/puppet-heartbeat.git',
        'git://github.com/example42/puppet-foo.git',
        'git://github.com/example42/puppet-collectd.git',
        'git://github.com/example42/puppi-gli.git',
    )
);

$out = array();
foreach ($repos as $party => $links) {
    foreach ($links as $link) {

        sleep(1);

        $cmd = 'git ls-remote --tags --heads ' . $link;
        echo $cmd . PHP_EOL;
        exec ($cmd, $refs, $retVal);
        if ($retVal) {
            echo 'Error occurred fetching tags for repo ' . $link  . '. Ignoring...';
            continue;
        }

        $repoName = $party . '/'
            . substr($link,
                strrpos($link, '/') + 1,
                strrpos($link, '.') - strrpos($link, '/') -1
            );
        $out[$repoName] = array();


        foreach ($refs as $ref) {
            preg_match('~(.*?)\trefs/(?P<refType>\w+)/(?P<name>\w+)~', $ref, $matches);

            $name = $matches['name'];
            if (substr($name, -3) == '^{}') {
                continue;
            }

            if ($matches['refType'] == 'heads') {
                $version = 'dev-' . $name;
                $refStr = $matches[1];
            } else {
                $version = str_replace(array('release-', 'v'), '', $name);
                $refStr = $name;
            }

            $out[$repoName][$version] = array(
                'name'    => $repoName,
                'version' => $version,
                'source'  => array(
                    'type'      => 'git',
                    'reference' => $refStr,
                    'url'       => str_replace(array('git://', '.git'), array('http://', ''), $link)
                )
            );

        }
    }
}

file_put_contents('packages.json', json_encode(array('packages' => $out), JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));