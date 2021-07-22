1. Check Palindrome 
- Access GET end point : https://qa.fitrafadilana.com/api/cek-palindrome
- JSON request : { "myString" : "_string_to_check" }
- Returned 200 : {"message": true} (if palindrome) or 404 : {"message": false } (if not palindrome)

2. Merge Words
- Access GET end point : https://qa.fitrafadilana.com/api/merge-words
- JSON request : { "myString" : "_string_to_check", "divider" : "integer_for_grouping" }
- 
