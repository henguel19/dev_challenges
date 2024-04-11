<?php
  function isAnagram($word1, $word2) {
    return strlen($word1) == strlen($word2) &&
      array_diff(str_split($word1), str_split($word2)) == [] &&
      array_diff(str_split($word2), str_split($word1)) == []
      ? "Yes" : "No";
  }
  
  echo "Are roma & amor anagram words? " . isAnagram("roma", "amor") . "<br/>";
  echo "Are sol & sola anagram words? " . isAnagram("sol", "sola") . "<br/>";
  echo "Are paz & zap anagram words? " . isAnagram("paz", "zap") . "<br/>";
?>
