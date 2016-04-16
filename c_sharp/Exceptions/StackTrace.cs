using System;
using System.Diagnostics;

try
{
    throw new Exception();
}
catch (Exception ex)
{
    // Get stack trace for the exception with source file information
    var st = new StackTrace(ex, true);
    // Get the top stack frame
    var frame = st.GetFrame(st.FrameCount-1);
    // Get the line number from the stack frame
    var line = frame.GetFileLineNumber();
}
