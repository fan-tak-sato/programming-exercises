Media Player
=============================

Adapter design pattern implementation in Java

Run the program
-----------------------------

You can copy the files on your IDE or run the main program with a command line:

	javac -g AdapterPatternDemo.java
	java AdapterPatternDemo

Implementation
-----------------------------

We have a MediaPlayer interface and a concrete class AudioPlayer implementing the MediaPlayer interface. AudioPlayer can play mp3 format audio files by default.

We are having another interface AdvancedMediaPlayer and concrete classes implementing the AdvancedMediaPlayer interface. These classes can play vlc and mp4 format files.

We want to make AudioPlayer to play other formats as well. To attain this, we have created an adapter class MediaAdapter which implements the MediaPlayer interface and uses AdvancedMediaPlayer objects to play the required format.

AudioPlayer uses the adapter class MediaAdapter passing it the desired audio type without knowing the actual class which can play the desired format. AdapterPatternDemo, our demo class will use AudioPlayer class to play various formats.

UML
-----------------------------

![Alt text](adapter_pattern_uml_diagram.jpg)
