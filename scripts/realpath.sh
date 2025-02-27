# This has been brazenly copied from https://github.com/monicahq/monica/blob/main/scripts/realpath.sh
realpath ()
{
    f=$@;
    if [ -z "$f" ]; then
      f=$(pwd)
    fi
    if [ -d "$f" ]; then
        base="";
        dir="$f";
    else
        base="/$(basename "$f")";
        dir=$(dirname "$f");
    fi;
    dir=$(cd "$dir" && /bin/pwd -P);
    echo "$dir$base"
}
