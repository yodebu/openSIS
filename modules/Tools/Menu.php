<?php
#**************************************************************************
#  openSIS is a free student information system for public and non-public 
#  schools from Open Solutions for Education, Inc. web: www.os4ed.com
#
#  openSIS is  web-based, open source, and comes packed with features that 
#  include student demographic info, scheduling, grade book, attendance, 
#  report cards, eligibility, transcripts, parent portal, 
#  student portal and more.   
#
#  Visit the openSIS web site at http://www.opensis.com to learn more.
#  If you have question regarding this system or the license, please send 
#  an email to info@os4ed.com.
#
#  This program is released under the terms of the GNU General Public License as  
#  published by the Free Software Foundation, version 2 of the License. 
#  See license.txt.
#
#  This program is distributed in the hope that it will be useful,
#  but WITHOUT ANY WARRANTY; without even the implied warranty of
#  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
#  GNU General Public License for more details.
#
#  You should have received a copy of the GNU General Public License
#  along with this program.  If not, see <http://www.gnu.org/licenses/>.
#
#***************************************************************************************
include('../../Redirect_modules.php');
$menu['Tools']['admin'] = array(
						#'Tools/Update.php'=>'Upgrade',
						#'Tools/InstallModule.php'=>'Install Module',
                      
						
						#'Tools/Restore.php'=>'Restore Database',
                               'Tools/LogDetails.php'=>'Access Log',
			       'Tools/DeleteLog.php'=>'Delete Log',
                               'Tools/Rollover.php'=>'Rollover',
                               'Tools/Backup.php'=>'Backup Database',
                                'Tools/LoadUSCommonCore.php'=>'Load US Common Core Standards',
                                1=>'Reports',  
                               'Tools/Reports.php?func=Basic'=>'At a Glance',
                               'Tools/Reports.php?func=Ins_r'=>'Institute Reports',
                               'Tools/Reports.php?func=Ins_cf'=>'Institute Custom Field Reports',                                
    );
?>
