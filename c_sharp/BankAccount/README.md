Bank Account
=================================

This is an "Hello World" project to get started with C# and Nunit using Monodevelop IDE.
The Program.cs file contains just an Hello World script to let the project run.
Open the solution file with Visual Studio or Monodevelop to execute the program and unit tests with NUnit.

Monodevelop Debugger Error
--------------------------------

You can have this message using Monodevelop:

	Cannot connect to debugger error:

Just execute this command on a Linux shell and the error will not appear again:

	unset GNOME_DESKTOP_SESSION_ID
	monodevelop

