<?php
    $version = '2.2'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    $pagetitle = 'sf::SoundStream::Chunk Struct Reference'; // the $ title variable is automatically replaced by doxygen with the page title
    include('../header.php');
?>
<!-- Generated by Doxygen 1.8.8 -->
  <div id="navrow1" class="tabs">
    <ul class="tablist">
      <li><a href="index.php"><span>Main&#160;Page</span></a></li>
      <li><a href="modules.php"><span>Modules</span></a></li>
      <li class="current"><a href="annotated.php"><span>Classes</span></a></li>
      <li><a href="files.php"><span>Files</span></a></li>
    </ul>
  </div>
  <div id="navrow2" class="tabs2">
    <ul class="tablist">
      <li><a href="annotated.php"><span>Class&#160;List</span></a></li>
      <li><a href="classes.php"><span>Class&#160;Index</span></a></li>
      <li><a href="hierarchy.php"><span>Class&#160;Hierarchy</span></a></li>
      <li><a href="functions.php"><span>Class&#160;Members</span></a></li>
    </ul>
  </div>
<div id="nav-path" class="navpath">
  <ul>
<li class="navelem"><b>sf</b></li><li class="navelem"><a class="el" href="classsf_1_1SoundStream.php">SoundStream</a></li><li class="navelem"><a class="el" href="structsf_1_1SoundStream_1_1Chunk.php">Chunk</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="summary">
<a href="#pub-attribs">Public Attributes</a> &#124;
<a href="structsf_1_1SoundStream_1_1Chunk-members.php">List of all members</a>  </div>
  <div class="headertitle">
<div class="title">sf::SoundStream::Chunk Struct Reference</div>  </div>
</div><!--header-->
<div class="contents">

<p>Structure defining a chunk of audio data to stream.  
 <a href="structsf_1_1SoundStream_1_1Chunk.php#details">More...</a></p>

<p><code>#include &lt;<a class="el" href="SoundStream_8hpp_source.php">SoundStream.hpp</a>&gt;</code></p>
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pub-attribs"></a>
Public Attributes</h2></td></tr>
<tr class="memitem:aa3b84d69adbe663a17a7671626076df4"><td class="memItemLeft" align="right" valign="top">const Int16 *&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="structsf_1_1SoundStream_1_1Chunk.php#aa3b84d69adbe663a17a7671626076df4">samples</a></td></tr>
<tr class="memdesc:aa3b84d69adbe663a17a7671626076df4"><td class="mdescLeft">&#160;</td><td class="mdescRight">Pointer to the audio samples.  <a href="#aa3b84d69adbe663a17a7671626076df4">More...</a><br /></td></tr>
<tr class="separator:aa3b84d69adbe663a17a7671626076df4"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:af47f5d94012acf8b11f056ba77aff97a"><td class="memItemLeft" align="right" valign="top">std::size_t&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="structsf_1_1SoundStream_1_1Chunk.php#af47f5d94012acf8b11f056ba77aff97a">sampleCount</a></td></tr>
<tr class="memdesc:af47f5d94012acf8b11f056ba77aff97a"><td class="mdescLeft">&#160;</td><td class="mdescRight">Number of samples pointed by Samples.  <a href="#af47f5d94012acf8b11f056ba77aff97a">More...</a><br /></td></tr>
<tr class="separator:af47f5d94012acf8b11f056ba77aff97a"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><p>Structure defining a chunk of audio data to stream. </p>

<p>Definition at line <a class="el" href="SoundStream_8hpp_source.php#l00053">53</a> of file <a class="el" href="SoundStream_8hpp_source.php">SoundStream.hpp</a>.</p>
</div><h2 class="groupheader">Member Data Documentation</h2>
<a class="anchor" id="af47f5d94012acf8b11f056ba77aff97a"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">std::size_t sf::SoundStream::Chunk::sampleCount</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Number of samples pointed by Samples. </p>

<p>Definition at line <a class="el" href="SoundStream_8hpp_source.php#l00056">56</a> of file <a class="el" href="SoundStream_8hpp_source.php">SoundStream.hpp</a>.</p>

</div>
</div>
<a class="anchor" id="aa3b84d69adbe663a17a7671626076df4"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">const Int16* sf::SoundStream::Chunk::samples</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Pointer to the audio samples. </p>

<p>Definition at line <a class="el" href="SoundStream_8hpp_source.php#l00055">55</a> of file <a class="el" href="SoundStream_8hpp_source.php">SoundStream.hpp</a>.</p>

</div>
</div>
<hr/>The documentation for this struct was generated from the following file:<ul>
<li><a class="el" href="SoundStream_8hpp_source.php">SoundStream.hpp</a></li>
</ul>
</div><!-- contents -->
<?php
    require("../footer.php");
?>
