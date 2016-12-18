<?php
/*
 * CPU Watcher for Cisco devices
 * Copyright (C) 2016 Chris Freas (code@packetbusters.net)

 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 * 
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License along with
 * this program; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 */

$community = "mysnmpcommunitystring";
$device = "mydevice";
$cmd5s = `/usr/bin/snmpwalk -Oqv -v2c -c $community $device .1.3.6.1.4.1.9.9.109.1.1.1.1.6`;
$cmd1m = `/usr/bin/snmpwalk -Oqv -v2c -c $community $device .1.3.6.1.4.1.9.9.109.1.1.1.1.7`;
$cmd5m = `/usr/bin/snmpwalk -Oqv -v2c -c $community $device .1.3.6.1.4.1.9.9.109.1.1.1.1.8`;

echo "$cmd5s $cmd1m $cmd5m";
?>
