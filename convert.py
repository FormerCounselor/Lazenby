import pandas as pd

# Read the Excel file
excel_file_path = "path_to_your_file.xlsx"
df = pd.read_excel(excel_file_path, engine="openpyxl")

# Convert to Markdown
markdown_file_path = "output.md"
with open(markdown_file_path, "w") as file:
    # You can customize the header to include Jekyll front matter
    file.write("---\n")
    file.write("layout: page\n")
    file.write("title: Your Title\n")
    file.write("---\n")

    # Write the Excel data as a Markdown table
    file.write(df.to_markdown(index=False))
