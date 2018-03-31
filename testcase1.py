
import matplotlib
import matplotlib.pyplot as plt
import pandas as pd
import numpy as np
from sklearn import datasets,linear_model


df = pd.read_csv(r"C:\Users\dhruv\Desktop\pd.csv")

df

t=df.loc[df['sr no'] ==2]

Y = t['mean(X)']
X = t['m3(Y)']
#C = df['sr no']

X=X.reshape(len(X),1)
Y=Y.reshape(len(Y),1)

X_train = X[:- -11]
X_test = X[:- -11]

Y_train = Y[:- -11]
Y_test = Y[:- -11]

#plt.scatter(X_test,Y_test,color='black')
#plt.title('TestData')
#plt.xlabel('Marks')
#plt.ylabel('mean')
#plt.show()
#if int(df['sr no'])==2:
  #  print(X)

print("\n \n your possible M3 marks are : ")
print(t['m3(Y)'])
print("\n\n\n")



regr = linear_model.LinearRegression()
regr.fit(X_train,Y_train)
plt.scatter(X_test,Y_test,color="black")
plt.title('test')
plt.xlabel('Marks')
plt.xlim(1,100)
plt.ylabel('mean')
plt.ylim(1,100)
plt.xtricks(())
plt.ytricks(())
plt.plot(X_test,regr.predict(X_test),color='red',linewidth=3)

