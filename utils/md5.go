package utils
import (
	"crypto/md5"
	"encoding/hex"
)
// MD5Str 计算MD5值
func MD5Str(str string) string {
	h := md5.New()
	h.Write([]byte(str))
	return hex.EncodeToString(h.Sum(nil))
}