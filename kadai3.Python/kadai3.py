import math

#行を揃えたヘッダーと区切り線
print(f"{'角度':>5} | {'sin':>8} | {'cos':>8} | {'tan':>8}")
print("-" * 40)

# 360度まで15度刻みでループ
for degree in range(0, 361, 15):
    #度をラジアンに変換
    radian = math.radians(degree)
    #sinの計算
    sin = math.sin(radian)
    #cosの計算
    cos = math.cos(radian)
    #tanの計算
    tan = math.tan(radian)

    #結果表示（小数点4桁まで）
    print(f"{degree:>5}° | {sin:>8.4f} | {cos:>8.4f} | {tan:>8.4f}")