# -*- coding: utf-8 -*-
"""
Created on Sat Mar 31 10:27:05 2018

@author: Abhi
"""

# -*- coding: utf-8 -*-
"""
Created on Fri Mar 30 20:39:03 2018

@author: Abhi
"""

import matplotlib
import matplotlib.pyplot as plt
import pandas as pd
import numpy as np
from sklearn import datasets,linear_model

x=range(0,10)
i=60
y = [i for j in x]

df = pd.read_csv(r"C:\Users\dhruv\Desktop\testcase2.csv")

for row in df['sr no']:
    t=df.loc[df['sr no']==row]
    plt.scatter(t['sr no'],t['m1'],color="black")
    plt.scatter(t['sr no'],t['m2'],color="blue")
    plt.ylim(0,100)
    
plt.plot(x,y, '--')
print("\n black=m1 marks \n red=m2 marks")