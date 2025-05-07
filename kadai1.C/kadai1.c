#include <stdio.h>

//生徒情報を管理する構造体
typedef struct {
    char name[10]; //名前（A～E）
    int math;     //数学の点数
    int phys;     //物理の点数
} Student;

int main() {
    //５人分の名前と点数を構造体で管理
    Student students[5] = {
        {"A", 72, 48},
        {"B", 88, 39},
        {"C", 72, 91},
        {"D", 81, 82},
        {"E", 68, 78}
    };

    //生徒の人数
    int num_students = sizeof(students) / sizeof(students[0]);

    //数学と物理の最大値、最小値、最大合計の初期値
    int max_math = students[0].math, min_math = students[0]. math, sum_math = 0;
    int max_phys = students[0].phys, min_phys = students[0]. phys, sum_phys = 0;

    //一番の合計点とその生徒
    int max_total = students[0].math + students[0].phys;
    int best_student = 0;

    //実際の最大値、最小値、最大合計をソートで求める
    for (int i = 0; i < num_students; i++) {
        int math = students[i].math;
        int phys = students[i].phys;

        //数学
        if (math > max_math) max_math = math;
        if (math < min_math) min_math = math;
        sum_math += math;

        //物理
        if (phys > max_phys) max_phys = phys;
        if (phys < min_phys) min_phys = phys;
        sum_phys += phys;

        //合計点
        int total = math + phys;
        if (total > max_total) {
            max_total = total;
            best_student = i;
        }
    }

    //結果表示
    printf("数学：最大＝%d 最低＝%d 平均＝%.2f\n", max_math, min_math, (double)sum_math / num_students);
    printf("物理：最大＝%d 最低＝%d 平均＝%.2f\n", max_phys, min_phys, (double)sum_phys / num_students);
    printf("合計最高得点者：%s (数学＝%d点、物理＝%d点、合計＝%d点)\n",
           students[best_student].name,
           students[best_student].math,
           students[best_student].phys,
           max_total);

    return 0;
}