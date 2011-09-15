# SubPoll 

   A simple poll library using KendoUI javascript framework chart widget

## Installation

   Copy the zip content into your application directory

   --

   database, session libraries have to be loaded
   url, form helpers have to be loaded
   
   --

   Import the polls.slq into the database.   		

## Usage

   Load or autoload the poll library:

   $this->load->library('poll');

   Show a poll:

   Use controller/method subpoll/poll_item

   Manage polls:

   Use controller/method subpoll/admin_poll
   (Note: Of course you have to separate admin methods into your backend controller)

## Functions

   SubPoll example controller functions:
   
   poll_item() :

     Show the currently active poll's question and answers

   poll_result() :

     Show the currently active poll's results

   admin_polls() :

     Show the polls management view

   add_new_poll() :

     Add a new poll to the database

   set_poll_status() :

     Set a poll status to active/inactive
     (Note: always one active poll is available at the same time)

   reset_poll() :

     Reset a poll values to zero

## Notes

   * You can play with ..

   - the KendoUI chart widget themes to change colors, appearance
   - the KendoUI chart widget parameters (http://demos.kendoui.com/chart/index.html)
   - the DIV#chart width and height values

     ..to customize the library

   * Adding new poll part uses javascript to add new input field(s), so if you refresh the browser the empty field(s) will be lost.