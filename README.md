# SubPoll 

A simple poll library using KendoUI javascript framework chart widget

## Installation

1. Copy the zip content into your application directory

2. database, session libraries have to be loaded 
   url, form helpers have to be loaded
   
3. Import the polls.slq into the database.   		

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
   

Show the currently active poll's question and answers:
    poll_item()

Show the currently active poll's results:
    poll_result() 

Show the polls management view:
    admin_polls() 

Add a new poll to the database:
    add_new_poll()

Set a poll status to active/inactive 
(Note: always one active poll is available at the same time):
    set_poll_status()

Reset a poll values to zero:
    reset_poll()

## Notes

   * You can play with the followings to customize the library

	   - the KendoUI chart widget themes to change colors, appearance
	   - the KendoUI chart widget parameters (http://demos.kendoui.com/chart/index.html)
	   - the DIV#chart width and height values

   * Adding new poll part uses javascript to add new input field(s), so if you refresh the browser the empty field(s) will be lost.