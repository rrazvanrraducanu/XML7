<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
    <xsl:output method="html"/>
    <xsl:template match="/">
        <html>
            <head>
                <title>track.xsl</title>
            </head>
            <body>
                
    <table border="1">
         <tr bgcolor="red">
                <th style="width:300px">Data</th>
                <th style="width:300px">IP</th>
                </tr>
<xsl:for-each select="razvan/track">
        <tr>
             <td style="width:300px"><xsl:value-of select="data"/></td>
             <td style="width:300px"><xsl:value-of select="IP"/></td>
         </tr>
    </xsl:for-each>
        </table>        
            </body>
        </html>
    </xsl:template>

</xsl:stylesheet>
