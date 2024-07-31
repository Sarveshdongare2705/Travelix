import numpy as np
import pandas as pd
from sklearn.linear_model import LinearRegression
import matplotlib.pyplot as plt
# Define the data
data = {
    'Years_of_Experience': [3, 8, 9, 13, 3, 6, 11, 21, 1, 16],
    'Salary_in_$100': [30, 57, 64, 72, 36, 43, 59, 90, 20, 83]
}

# Create a DataFrame
df = pd.DataFrame(data)

# Separate the features (X) and target variable (y)
X = df['Years_of_Experience'].values.reshape(-1, 1)
y = df['Salary_in_$100'].values
# Create a linear regression model
model = LinearRegression()

# Fit the model to the data
model.fit(X, y)
# Predict the salary for individuals with 10 years of experience
years_of_experience = np.array([[10]])
predicted_salary = model.predict(years_of_experience)
print(f'Predicted Salary for 10 years of experience: ${predicted_salary[0]:.2f}')
# Plot the data points and regression line
plt.scatter(X, y, label='Data Points')
plt.plot(X, model.predict(X), color='red', label='Regression Line')
plt.xlabel('Years of Experience')
plt.ylabel('Salary in $100')
plt.legend()
plt.title('Salary Prediction Based on Years of Experience')
plt.show()

