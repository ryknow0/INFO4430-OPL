using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;

namespace OremLibrary.Models
{
    public class Admin
    {
        public int UserID { get; set; }
        public virtual string UserName { get; set; }
        public virtual string Password { get; set; }
        public virtual char Permissions { get; set; }
        public virtual int EventId { get; set; }
        public virtual int ReportId { get; set; }
        public virtual int EmployeeId { get; set; }
        public virtual Event Event { get; set; }
        public virtual Report Report { get; set; }
        public List<Event> Events { get; set; }
    }
}