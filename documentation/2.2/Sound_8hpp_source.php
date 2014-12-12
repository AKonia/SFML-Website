<?php
    $version = '2.2'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    $pagetitle = 'Sound.hpp Source File'; // the $ title variable is automatically replaced by doxygen with the page title
    include('../header.php');
?>
<!-- Generated by Doxygen 1.8.8 -->
  <div id="navrow1" class="tabs">
    <ul class="tablist">
      <li><a href="index.php"><span>Main&#160;Page</span></a></li>
      <li><a href="modules.php"><span>Modules</span></a></li>
      <li><a href="annotated.php"><span>Classes</span></a></li>
      <li class="current"><a href="files.php"><span>Files</span></a></li>
    </ul>
  </div>
  <div id="navrow2" class="tabs2">
    <ul class="tablist">
      <li><a href="files.php"><span>File&#160;List</span></a></li>
    </ul>
  </div>
<div id="nav-path" class="navpath">
  <ul>
<li class="navelem"><a class="el" href="dir_7107138a9ca528d5a30fb6c42d13b481.php">SFML</a></li><li class="navelem"><a class="el" href="dir_186e0dcb96ed2747fde77bc4d13d2016.php">include</a></li><li class="navelem"><a class="el" href="dir_8300c2a4f3c47520e59b1ed4cebc1d64.php">SFML</a></li><li class="navelem"><a class="el" href="dir_985e7cc4f3a776db56f3b932018351f7.php">Audio</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="headertitle">
<div class="title">Sound.hpp</div>  </div>
</div><!--header-->
<div class="contents">
<div class="fragment"><div class="line"><a name="l00001"></a><span class="lineno">    1</span>&#160;<span class="comment">//</span></div>
<div class="line"><a name="l00003"></a><span class="lineno">    3</span>&#160;<span class="comment">// SFML - Simple and Fast Multimedia Library</span></div>
<div class="line"><a name="l00004"></a><span class="lineno">    4</span>&#160;<span class="comment">// Copyright (C) 2007-2014 Laurent Gomila (laurent.gom@gmail.com)</span></div>
<div class="line"><a name="l00005"></a><span class="lineno">    5</span>&#160;<span class="comment">//</span></div>
<div class="line"><a name="l00006"></a><span class="lineno">    6</span>&#160;<span class="comment">// This software is provided &#39;as-is&#39;, without any express or implied warranty.</span></div>
<div class="line"><a name="l00007"></a><span class="lineno">    7</span>&#160;<span class="comment">// In no event will the authors be held liable for any damages arising from the use of this software.</span></div>
<div class="line"><a name="l00008"></a><span class="lineno">    8</span>&#160;<span class="comment">//</span></div>
<div class="line"><a name="l00009"></a><span class="lineno">    9</span>&#160;<span class="comment">// Permission is granted to anyone to use this software for any purpose,</span></div>
<div class="line"><a name="l00010"></a><span class="lineno">   10</span>&#160;<span class="comment">// including commercial applications, and to alter it and redistribute it freely,</span></div>
<div class="line"><a name="l00011"></a><span class="lineno">   11</span>&#160;<span class="comment">// subject to the following restrictions:</span></div>
<div class="line"><a name="l00012"></a><span class="lineno">   12</span>&#160;<span class="comment">//</span></div>
<div class="line"><a name="l00013"></a><span class="lineno">   13</span>&#160;<span class="comment">// 1. The origin of this software must not be misrepresented;</span></div>
<div class="line"><a name="l00014"></a><span class="lineno">   14</span>&#160;<span class="comment">//    you must not claim that you wrote the original software.</span></div>
<div class="line"><a name="l00015"></a><span class="lineno">   15</span>&#160;<span class="comment">//    If you use this software in a product, an acknowledgment</span></div>
<div class="line"><a name="l00016"></a><span class="lineno">   16</span>&#160;<span class="comment">//    in the product documentation would be appreciated but is not required.</span></div>
<div class="line"><a name="l00017"></a><span class="lineno">   17</span>&#160;<span class="comment">//</span></div>
<div class="line"><a name="l00018"></a><span class="lineno">   18</span>&#160;<span class="comment">// 2. Altered source versions must be plainly marked as such,</span></div>
<div class="line"><a name="l00019"></a><span class="lineno">   19</span>&#160;<span class="comment">//    and must not be misrepresented as being the original software.</span></div>
<div class="line"><a name="l00020"></a><span class="lineno">   20</span>&#160;<span class="comment">//</span></div>
<div class="line"><a name="l00021"></a><span class="lineno">   21</span>&#160;<span class="comment">// 3. This notice may not be removed or altered from any source distribution.</span></div>
<div class="line"><a name="l00022"></a><span class="lineno">   22</span>&#160;<span class="comment">//</span></div>
<div class="line"><a name="l00024"></a><span class="lineno">   24</span>&#160;<span class="comment"></span></div>
<div class="line"><a name="l00025"></a><span class="lineno">   25</span>&#160;<span class="preprocessor">#ifndef SFML_SOUND_HPP</span></div>
<div class="line"><a name="l00026"></a><span class="lineno">   26</span>&#160;<span class="preprocessor">#define SFML_SOUND_HPP</span></div>
<div class="line"><a name="l00027"></a><span class="lineno">   27</span>&#160;</div>
<div class="line"><a name="l00029"></a><span class="lineno">   29</span>&#160;<span class="comment">// Headers</span></div>
<div class="line"><a name="l00031"></a><span class="lineno">   31</span>&#160;<span class="comment"></span><span class="preprocessor">#include &lt;SFML/Audio/Export.hpp&gt;</span></div>
<div class="line"><a name="l00032"></a><span class="lineno">   32</span>&#160;<span class="preprocessor">#include &lt;SFML/Audio/SoundSource.hpp&gt;</span></div>
<div class="line"><a name="l00033"></a><span class="lineno">   33</span>&#160;<span class="preprocessor">#include &lt;SFML/System/Time.hpp&gt;</span></div>
<div class="line"><a name="l00034"></a><span class="lineno">   34</span>&#160;<span class="preprocessor">#include &lt;cstdlib&gt;</span></div>
<div class="line"><a name="l00035"></a><span class="lineno">   35</span>&#160;</div>
<div class="line"><a name="l00036"></a><span class="lineno">   36</span>&#160;</div>
<div class="line"><a name="l00037"></a><span class="lineno">   37</span>&#160;<span class="keyword">namespace </span><a class="code" href="namespacesf.php">sf</a></div>
<div class="line"><a name="l00038"></a><span class="lineno">   38</span>&#160;{</div>
<div class="line"><a name="l00039"></a><span class="lineno">   39</span>&#160;<span class="keyword">class </span>SoundBuffer;</div>
<div class="line"><a name="l00040"></a><span class="lineno">   40</span>&#160;</div>
<div class="line"><a name="l00045"></a><span class="lineno"><a class="line" href="classsf_1_1Sound.php">   45</a></span>&#160;<span class="keyword">class </span>SFML_AUDIO_API <a class="code" href="classsf_1_1Sound.php">Sound</a> : <span class="keyword">public</span> <a class="code" href="classsf_1_1SoundSource.php">SoundSource</a></div>
<div class="line"><a name="l00046"></a><span class="lineno">   46</span>&#160;{</div>
<div class="line"><a name="l00047"></a><span class="lineno">   47</span>&#160;<span class="keyword">public</span>:</div>
<div class="line"><a name="l00048"></a><span class="lineno">   48</span>&#160;</div>
<div class="line"><a name="l00053"></a><span class="lineno">   53</span>&#160;    <a class="code" href="classsf_1_1Sound.php">Sound</a>();</div>
<div class="line"><a name="l00054"></a><span class="lineno">   54</span>&#160;</div>
<div class="line"><a name="l00061"></a><span class="lineno">   61</span>&#160;    <span class="keyword">explicit</span> <a class="code" href="classsf_1_1Sound.php">Sound</a>(<span class="keyword">const</span> <a class="code" href="classsf_1_1SoundBuffer.php">SoundBuffer</a>&amp; buffer);</div>
<div class="line"><a name="l00062"></a><span class="lineno">   62</span>&#160;</div>
<div class="line"><a name="l00069"></a><span class="lineno">   69</span>&#160;    <a class="code" href="classsf_1_1Sound.php">Sound</a>(<span class="keyword">const</span> <a class="code" href="classsf_1_1Sound.php">Sound</a>&amp; copy);</div>
<div class="line"><a name="l00070"></a><span class="lineno">   70</span>&#160;</div>
<div class="line"><a name="l00075"></a><span class="lineno">   75</span>&#160;    ~<a class="code" href="classsf_1_1Sound.php">Sound</a>();</div>
<div class="line"><a name="l00076"></a><span class="lineno">   76</span>&#160;</div>
<div class="line"><a name="l00089"></a><span class="lineno">   89</span>&#160;    <span class="keywordtype">void</span> play();</div>
<div class="line"><a name="l00090"></a><span class="lineno">   90</span>&#160;</div>
<div class="line"><a name="l00100"></a><span class="lineno">  100</span>&#160;    <span class="keywordtype">void</span> pause();</div>
<div class="line"><a name="l00101"></a><span class="lineno">  101</span>&#160;</div>
<div class="line"><a name="l00112"></a><span class="lineno">  112</span>&#160;    <span class="keywordtype">void</span> stop();</div>
<div class="line"><a name="l00113"></a><span class="lineno">  113</span>&#160;</div>
<div class="line"><a name="l00126"></a><span class="lineno">  126</span>&#160;    <span class="keywordtype">void</span> setBuffer(<span class="keyword">const</span> <a class="code" href="classsf_1_1SoundBuffer.php">SoundBuffer</a>&amp; buffer);</div>
<div class="line"><a name="l00127"></a><span class="lineno">  127</span>&#160;</div>
<div class="line"><a name="l00141"></a><span class="lineno">  141</span>&#160;    <span class="keywordtype">void</span> setLoop(<span class="keywordtype">bool</span> loop);</div>
<div class="line"><a name="l00142"></a><span class="lineno">  142</span>&#160;</div>
<div class="line"><a name="l00156"></a><span class="lineno">  156</span>&#160;    <span class="keywordtype">void</span> setPlayingOffset(<a class="code" href="classsf_1_1Time.php">Time</a> timeOffset);</div>
<div class="line"><a name="l00157"></a><span class="lineno">  157</span>&#160;</div>
<div class="line"><a name="l00164"></a><span class="lineno">  164</span>&#160;    <span class="keyword">const</span> <a class="code" href="classsf_1_1SoundBuffer.php">SoundBuffer</a>* getBuffer() <span class="keyword">const</span>;</div>
<div class="line"><a name="l00165"></a><span class="lineno">  165</span>&#160;</div>
<div class="line"><a name="l00174"></a><span class="lineno">  174</span>&#160;    <span class="keywordtype">bool</span> getLoop() <span class="keyword">const</span>;</div>
<div class="line"><a name="l00175"></a><span class="lineno">  175</span>&#160;</div>
<div class="line"><a name="l00184"></a><span class="lineno">  184</span>&#160;    <a class="code" href="classsf_1_1Time.php">Time</a> getPlayingOffset() <span class="keyword">const</span>;</div>
<div class="line"><a name="l00185"></a><span class="lineno">  185</span>&#160;</div>
<div class="line"><a name="l00192"></a><span class="lineno">  192</span>&#160;    <a class="code" href="classsf_1_1SoundSource.php#ac43af72c98c077500b239bc75b812f03">Status</a> getStatus() <span class="keyword">const</span>;</div>
<div class="line"><a name="l00193"></a><span class="lineno">  193</span>&#160;</div>
<div class="line"><a name="l00202"></a><span class="lineno">  202</span>&#160;    <a class="code" href="classsf_1_1Sound.php">Sound</a>&amp; operator =(<span class="keyword">const</span> <a class="code" href="classsf_1_1Sound.php">Sound</a>&amp; right);</div>
<div class="line"><a name="l00203"></a><span class="lineno">  203</span>&#160;</div>
<div class="line"><a name="l00213"></a><span class="lineno">  213</span>&#160;    <span class="keywordtype">void</span> resetBuffer();</div>
<div class="line"><a name="l00214"></a><span class="lineno">  214</span>&#160;</div>
<div class="line"><a name="l00215"></a><span class="lineno">  215</span>&#160;<span class="keyword">private</span>:</div>
<div class="line"><a name="l00216"></a><span class="lineno">  216</span>&#160;</div>
<div class="line"><a name="l00218"></a><span class="lineno">  218</span>&#160;    <span class="comment">// Member data</span></div>
<div class="line"><a name="l00220"></a><span class="lineno">  220</span>&#160;<span class="comment"></span>    <span class="keyword">const</span> <a class="code" href="classsf_1_1SoundBuffer.php">SoundBuffer</a>* m_buffer; </div>
<div class="line"><a name="l00221"></a><span class="lineno">  221</span>&#160;};</div>
<div class="line"><a name="l00222"></a><span class="lineno">  222</span>&#160;</div>
<div class="line"><a name="l00223"></a><span class="lineno">  223</span>&#160;} <span class="comment">// namespace sf</span></div>
<div class="line"><a name="l00224"></a><span class="lineno">  224</span>&#160;</div>
<div class="line"><a name="l00225"></a><span class="lineno">  225</span>&#160;</div>
<div class="line"><a name="l00226"></a><span class="lineno">  226</span>&#160;<span class="preprocessor">#endif // SFML_SOUND_HPP</span></div>
<div class="line"><a name="l00227"></a><span class="lineno">  227</span>&#160;</div>
<div class="line"><a name="l00228"></a><span class="lineno">  228</span>&#160;</div>
<div class="ttc" id="namespacesf_php"><div class="ttname"><a href="namespacesf.php">sf</a></div><div class="ttdef"><b>Definition:</b> <a href="Listener_8hpp_source.php#l00035">Listener.hpp:35</a></div></div>
<div class="ttc" id="classsf_1_1Time_php"><div class="ttname"><a href="classsf_1_1Time.php">sf::Time</a></div><div class="ttdoc">Represents a time value. </div><div class="ttdef"><b>Definition:</b> <a href="Time_8hpp_source.php#l00040">Time.hpp:40</a></div></div>
<div class="ttc" id="classsf_1_1SoundBuffer_php"><div class="ttname"><a href="classsf_1_1SoundBuffer.php">sf::SoundBuffer</a></div><div class="ttdoc">Storage for audio samples defining a sound. </div><div class="ttdef"><b>Definition:</b> <a href="SoundBuffer_8hpp_source.php#l00052">SoundBuffer.hpp:52</a></div></div>
<div class="ttc" id="classsf_1_1Sound_php"><div class="ttname"><a href="classsf_1_1Sound.php">sf::Sound</a></div><div class="ttdoc">Regular sound that can be played in the audio environment. </div><div class="ttdef"><b>Definition:</b> <a href="Sound_8hpp_source.php#l00045">Sound.hpp:45</a></div></div>
<div class="ttc" id="classsf_1_1SoundSource_php_ac43af72c98c077500b239bc75b812f03"><div class="ttname"><a href="classsf_1_1SoundSource.php#ac43af72c98c077500b239bc75b812f03">sf::SoundSource::Status</a></div><div class="ttdeci">Status</div><div class="ttdoc">Enumeration of the sound source states. </div><div class="ttdef"><b>Definition:</b> <a href="SoundSource_8hpp_source.php#l00049">SoundSource.hpp:49</a></div></div>
<div class="ttc" id="classsf_1_1SoundSource_php"><div class="ttname"><a href="classsf_1_1SoundSource.php">sf::SoundSource</a></div><div class="ttdoc">Base class defining a sound&#39;s properties. </div><div class="ttdef"><b>Definition:</b> <a href="SoundSource_8hpp_source.php#l00041">SoundSource.hpp:41</a></div></div>
</div><!-- fragment --></div><!-- contents -->
<?php
    require("../footer.php");
?>
