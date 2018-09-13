<?php

if (!isset($drush_major_version)) {
  $drush_version_components = explode('.', DRUSH_VERSION);
  $drush_major_version = $drush_version_components[0];
}
// Site paragondev, environment dev
$aliases['dev'] = array(
  'root' => '/var/www/html/paragondev.dev/docroot',
  'ac-site' => 'paragondev',
  'ac-env' => 'dev',
  'ac-realm' => 'devcloud',
  'uri' => 'paragondevansnwocpp3.devcloud.acquia-sites.com',
  'remote-host' => 'paragondevansnwocpp3.ssh.devcloud.acquia-sites.com',
  'remote-user' => 'paragondev.dev',
  'path-aliases' => array(
    '%drush-script' => 'drush' . $drush_major_version,
  )
);
$aliases['dev.livedev'] = array(
  'parent' => '@paragondev.dev',
  'root' => '/mnt/gfs/paragondev.dev/livedev/docroot',
);

if (!isset($drush_major_version)) {
  $drush_version_components = explode('.', DRUSH_VERSION);
  $drush_major_version = $drush_version_components[0];
}
// Site paragondev, environment prod
$aliases['prod'] = array(
  'root' => '/var/www/html/paragondev.prod/docroot',
  'ac-site' => 'paragondev',
  'ac-env' => 'prod',
  'ac-realm' => 'devcloud',
  'uri' => 'paragondev2oyxhmu5mr.devcloud.acquia-sites.com',
  'remote-host' => 'paragondev2oyxhmu5mr.ssh.devcloud.acquia-sites.com',
  'remote-user' => 'paragondev.prod',
  'path-aliases' => array(
    '%drush-script' => 'drush' . $drush_major_version,
  )
);
$aliases['prod.livedev'] = array(
  'parent' => '@paragondev.prod',
  'root' => '/mnt/gfs/paragondev.prod/livedev/docroot',
);

if (!isset($drush_major_version)) {
  $drush_version_components = explode('.', DRUSH_VERSION);
  $drush_major_version = $drush_version_components[0];
}
// Site paragondev, environment test
$aliases['test'] = array(
  'root' => '/var/www/html/paragondev.test/docroot',
  'ac-site' => 'paragondev',
  'ac-env' => 'test',
  'ac-realm' => 'devcloud',
  'uri' => 'paragondevmsusi7dabk.devcloud.acquia-sites.com',
  'remote-host' => 'paragondevmsusi7dabk.ssh.devcloud.acquia-sites.com',
  'remote-user' => 'paragondev.test',
  'path-aliases' => array(
    '%drush-script' => 'drush' . $drush_major_version,
  )
);
$aliases['test.livedev'] = array(
  'parent' => '@paragondev.test',
  'root' => '/mnt/gfs/paragondev.test/livedev/docroot',
);
