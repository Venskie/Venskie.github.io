
import pandas as pd

df = pd.read_excel('Example_Data.xlsx') #Lagay mo dito yung pangalan ng excel file mo.
                                #Mas okay kung itong python file mo and yung excel is magkasama
print("Original Data")
print(df)

Final_result = df.sort_values('Name')#Sort mo dito (name, age , gender , etc)
print("\nSorted Name")#Edit mo nalang din to
print(Final_result)