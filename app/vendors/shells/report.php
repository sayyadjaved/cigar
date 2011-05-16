<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class ReportShell extends Shell
{
    var $uses = array('User','Profile');
         function main()
            {

             $this->out('Student Details');
             $this->hr();
               if (count($this->args) === 0)
                     {
                        $firstName = $this->in('Please enter the Students Name:');
                     } else {
                              $firstName = $this->args[0];
                            }

                // Get users info

             $details = $this->User->find("all", array('conditions'=>array('Profile.first_name' =>$firstName)));

             foreach($details as $detail)
              {
                 $id = $detail['User']['id'];
                 $userName = $detail['User']['username'];
                 $email = $detail['User']['email'];
                 $profileId = $detail['Profile']['id'];
                 $firstName = $detail['Profile']['first_name'];
                 $lastName = $detail['Profile']['last_name'];
                 $address = $detail['Profile']['address'];
                 $phoneNumber = $detail['Profile']['phone_number'];
                 $createdDate = $detail['Profile']['created'];
                 $modifiedDate = $detail['Profile']['modified'];

                 $this->out($id."\n");
                 $this->out($userName."\n");
                 $this->hr();
                 $this->out($email."\n");
                 $this->out($profileId."\n");
                 $this->out($firstName."\n");
                 $this->out($lastName."\n");
                 $this->out($address."\n");
                 $this->out($phoneNumber."\n");
                 $this->out($createdDate."\n");
                 $this->out($modifiedDate."\n");
                 $this->hr();
              }
            }
 }


?>
