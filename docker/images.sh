a=768
for i in *.jpg; do
  new=$(printf "session1_$a.jpg") #04 pad to length of 4
  mv -i -- "$i" "$new"
  let a=a+1
done